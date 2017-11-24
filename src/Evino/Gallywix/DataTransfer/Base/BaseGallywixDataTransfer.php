<?php

namespace Evino\Gallywix\DataTransfer\Base;

use JsonMapper;

abstract class BaseGallywixDataTransfer implements \JsonSerializable {

    /**
     * @param \stdClass $json
     * @param bool $includeNullValues
     * @return BaseGallywixDataTransfer
     */
    public static function fromJsonObject(\stdClass $json, bool $includeNullValues = false): self
    {
        $instance = new static();

        if (!$includeNullValues) {
            $json = (object)self::stripNullValuesFromArray((array)$json);
        }

        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;

        $mapper->map($json, $instance);

        return $instance;
    }

    /**
     * @param string $json
     * @param bool $includeNullValues
     * @return BaseGallywixDataTransfer
     */
    public static function fromJsonString(string $json, bool $includeNullValues = false): self
    {
        return self::fromJsonObject(json_decode($json), $includeNullValues);
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
    */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return \stdClass
     */
    public function toNFeTag(): \stdClass
    {
        return (object)array_filter(get_object_vars($this), function($value) {
            return !is_object($value);
        });
    }

    /**
     * @param array $array
     * @return array
     */
    protected static function stripNullValuesFromArray(array $array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = self::stripNullValuesFromArray($value);
            } else if ($value instanceof \stdClass) {
                $array[$key] = (object)self::stripNullValuesFromArray((array)$value);
            } else if (is_null($value)) {
                unset($array[$key]);
            }
        }

        return $array;
    }

}
