<?php

namespace Evino\Tests\Gallywix\Helpers;

final class ObjectHelper
{
    /**
     * @param \stdClass $std
     * @return object
     */
    public static function stripNullValuesFromStdClass(\stdClass $std)
    {
        $array = (array)$std;

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = self::stripNullValuesFromArray($value);
            } else if ($value instanceof \stdClass) {
                $array[$key] = (object)self::stripNullValuesFromArray((array)$value);
            } else if (is_null($value)) {
                unset($array[$key]);
            }
        }

        return (object)$array;
    }
}
