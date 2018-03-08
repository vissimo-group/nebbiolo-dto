<?php

namespace Evino\Nebbiolo\DataTransfer\Base;

use JsonMapper;

/**
 * Base data transfer class; extended by all data transfers in this project
 * @package Evino\Nebbiolo\DataTransfer\Base
 */
abstract class BaseDataTransfer implements \JsonSerializable
{
    /**
     * Instantiate the DTO from a JSON object
     *
     * @param \stdClass $json
     * @param bool $includeNullValues
     *
     * @throws \JsonMapper_Exception
     *
     * @return static
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
     * Instantiate the DTO from a JSON string
     *
     * @param string $json
     * @param bool $includeNullValues
     *
     * @throws \JsonMapper_Exception
     *
     * @return BaseDataTransfer
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
     * Converts DTO to JSON string
     *
     * @param bool $includeNullValues
     * @return string
     */
    public function toJson($includeNullValues = false)
    {
        $encoded = json_encode($this);

        if (!$includeNullValues) {
            $encoded = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $encoded);
        }

        return $encoded;
    }

    /**
     * Converts DTO to a NFe tag
     * This is the format used by NFe-PHP libraries
     *
     * @return \stdClass
     */
    public function toNFeTag()
    {
        return (object)array_filter(get_object_vars($this), function ($value) {
            return !is_null($value) && !is_object($value) && !is_array($value);
        });
    }

    /**
     * Converts DTO to a NFe tag with `item` property
     * This is the format used by NFe-PHP libraries
     *
     * @param integer $number
     *
     * @return \stdClass
     */
    public function toNFeTagWithItemNumber($number)
    {
        return $this->toNFeTagWithExtras(['item' => $number]);
    }

    /**
     * Converts DTO to a NFe tag with given extra properties
     * This is the format used by NFe-PHP libraries
     *
     * @param array $extras
     *
     * @return \stdClass
     */
    public function toNFeTagWithExtras($extras)
    {
        $tag = $this->toNFeTag();

        foreach ($extras as $key => $value) {
            $tag->$key = $value;
        }

        return $tag;
    }

    /**
     * @param array $array
     *
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
