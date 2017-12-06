<?php

namespace Evino\Gallywix\DataTransfer\Base;

use JsonMapper;

abstract class BaseGallywixDataTransfer implements \JsonSerializable
{
    /**
     * @param \stdClass $json
     * @param bool $includeNullValues
     * @return static
     * @throws \JsonMapper_Exception
     */
    public static function fromJsonObject(\stdClass $json, $includeNullValues = false)
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
     * @throws \JsonMapper_Exception
     */
    public static function fromJsonString($json, $includeNullValues = false)
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
     * @return string
     */
    public function toJson()
    {
        return json_encode($this);
    }

    /**
     * @return \stdClass
     */
    public function toNFeTag()
    {
        return (object)array_filter(get_object_vars($this), function($value) {
            return !is_null($value) && !is_object($value) && !is_array($value);
        });
    }

    /**
     * @param integer $number
     * @return \stdClass
     */
    public function toNFeTagWithItemNumber($number)
    {
        return $this->toNFeTagWithExtras(['item' => $number]);
    }

    /**
     * @param array $extras
     * @return \stdClass
     */
    public function toNFeTagWithExtras($extras)
    {
        $tag = self::toNFeTag();

        foreach ($extras as $key => $value) {
            $tag->$key = $value;
        }

        return $tag;
    }

    /**
     * @param array $array
     * @return array
     */
    protected static function stripNullValuesFromArray($array)
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
