<?php

namespace Evino\Gallywix\DataTransfer\Base;

use JsonMapper;

abstract class BaseGallywixDataTransfer implements \JsonSerializable {

    /**
     * @param \stdClass $json
     * @return BaseGallywixDataTransfer
     */
    public static function fromJson(\stdClass $json): BaseGallywixDataTransfer {
        $instance = new static();

        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;

        $mapper->map($json, $instance);

        return $instance;
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
    public function toStdClass(): \stdClass
    {
        $attributes = get_object_vars($this);
        $stdClass = new \stdClass();

        foreach ($attributes as $key => $value) {
            if ($value instanceof BaseGallywixDataTransfer) {
                $stdClass->$key = $value->toStdClass();
            } else {
                $stdClass->$key = $value;
            }
        }

        return $stdClass;
    }

}
