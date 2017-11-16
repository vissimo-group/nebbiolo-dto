<?php

namespace Evino\Gallywix\DataTransfer\Base;

use JsonMapper;

abstract class AbstractJsonSerializable implements \JsonSerializable {
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
     * @param \stdClass $json
     * @return AbstractJsonSerializable
     */
    public static function fromJson(\stdClass $json): AbstractJsonSerializable {
        $instance = new static();

        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;

        $mapper->map($json, $instance);

        return $instance;
    }
}
