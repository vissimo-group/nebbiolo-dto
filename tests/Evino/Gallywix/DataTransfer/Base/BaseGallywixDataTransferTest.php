<?php

namespace Evino\Tests\Gallywix\DataTransfer\Base;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use PHPUnit\Framework\TestCase;

/**
 * Class BaseGallywixDataTransferTest
 * @package Evino\Tests\Gallywix\DataTransfer\Base
 */
final class BaseGallywixDataTransferTest extends TestCase
{
    /**
     * @return void
     * @throws \JsonMapper_Exception
     */
    public function testCanInstantiateFromValidJsonObject()
    {
        $json = json_decode($this->sampleJsonString());

        /** @var BaseGallywixDataTransferTestClass $dt */
        $dt = BaseGallywixDataTransferTestClass::fromJsonObject($json);

        $this->assertEquals($this->sampleDT(), $dt);
    }

    /**
     * @return void
     * @throws \JsonMapper_Exception
     */
    public function testCanInstantiateFromValidJsonString()
    {
        $json = $this->sampleJsonString();

        /** @var BaseGallywixDataTransferTestClass $dt */
        $dt = BaseGallywixDataTransferTestClass::fromJsonString($json);

        $this->assertEquals($this->sampleDT(), $dt);
    }

    /**
     * @return void
     */
    public function testJsonSerialize()
    {
        $expectedToJson = $this->sampleJsonString();

        $actualToJson = $this->sampleDT()->toJson();

        $this->assertEquals($expectedToJson, $actualToJson);
    }

    /**
     * @return void
     */
    public function testToJson()
    {
        $expectedToJson = $this->sampleJsonString();

        $actualToJson = $this->sampleDT()->toJson();

        $this->assertEquals($expectedToJson, $actualToJson);
    }

    /**
     * @return void
     */
    public function testToNFeTag()
    {
        $expectedNFeTag = new \stdClass();
        $expectedNFeTag->stringAttribute = $this->sampleStringAttribute;
        $expectedNFeTag->numberAttribute = $this->sampleNumberAttribute;
        $expectedNFeTag->arrayAttribute = $this->sampleArrayAttribute;

        $actualNFeTag = $this->sampleDT()->toNFeTag();

        $this->assertEquals($expectedNFeTag, $actualNFeTag);
    }

    /**
     * @return void
     */
    public function testStripNullValuesFromArray()
    {
        $stdWithNull = new \stdClass();
        $stdWithNull->thisIsANumber = 1;
        $stdWithNull->thisIsAnArray = [
            "thisIsAString" => "value",
            "thisIsANull" => null
        ];
        $stdWithNull->thisIsANull = null;

        $stdWithoutNulls = new \stdClass();
        $stdWithoutNulls->thisIsANumber = 1;
        $stdWithoutNulls->thisIsAnArray = [
            "thisIsAString" => "value"
        ];

        $input = [
            "thisIsAString" => "value",
            "thisIsANull" => null,
            "thisIsAnObject" => $stdWithNull,
            "thisIsAnArray" => [
                "thisIsAString" => "value",
                "thisIsANull" => null,
                "thisIsAnArray" => [
                    "thisIsAString" => "value",
                    "thisIsANull" => null
                ]
            ]
        ];

        $expectedOutput = [
            "thisIsAString" => "value",
            "thisIsAnObject" => $stdWithoutNulls,
            "thisIsAnArray" => [
                "thisIsAString" => "value",
                "thisIsAnArray" => [
                    "thisIsAString" => "value"
                ]
            ]
        ];

        $actualOutput = BaseGallywixDataTransferTestClass::stripNullValuesFromArray($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/

    /** @var string */
    private $sampleStringAttribute = "trade prince gallywix";

    /** @var int */
    private $sampleNumberAttribute = 19;

    /** @var array */
    private $sampleArrayAttribute = ["trade", "prince", "gallywix"];

    /**
     * @return \stdClass
     */
    private function sampleObjectAttribute()
    {
        $obj = new \stdClass();
        $obj->name = "trade prince gallywix";

        return $obj;
    }

    /**
     * @return string
     */
    private function sampleJsonString()
    {
        return "" .
            "{\"stringAttribute\":\"{$this->sampleStringAttribute}\"," .
                "\"numberAttribute\":{$this->sampleNumberAttribute}," .
                "\"arrayAttribute\":[" .
                    "\"{$this->sampleArrayAttribute[0]}\"," .
                    "\"{$this->sampleArrayAttribute[1]}\"," .
                    "\"{$this->sampleArrayAttribute[2]}\"" .
                "]," .
                "\"objectAttribute\":{" .
                    "\"name\":\"{$this->sampleObjectAttribute()->name}\"" .
                "}" .
            "}";
    }

    /**
     * @return BaseGallywixDataTransferTestClass
     */
    private function sampleDT()
    {
        $dt = new BaseGallywixDataTransferTestClass();

        $dt->setStringAttribute($this->sampleStringAttribute);
        $dt->setNumberAttribute($this->sampleNumberAttribute);
        $dt->setArrayAttribute($this->sampleArrayAttribute);
        $dt->setObjectAttribute($this->sampleObjectAttribute());

        return $dt;
    }
}

/**
 * Class BaseGallywixDataTransferTestClass
 * @package Evino\Tests\Gallywix\DataTransfer\Base
 */
class BaseGallywixDataTransferTestClass extends BaseGallywixDataTransfer
{
    /** @var string */
    protected $stringAttribute;

    /** @var integer */
    protected $numberAttribute;

    /** @var array */
    protected $arrayAttribute;

    /** @var \stdClass */
    protected $objectAttribute;

    /**
     * @param array $array
     * @return array
     */
    public static function stripNullValuesFromArray($array)
    {
        return parent::stripNullValuesFromArray($array); // TODO: Change the autogenerated stub
    }

    /**
     * @return string
     */
    public function getStringAttribute()
    {
        return $this->stringAttribute;
    }

    /**
     * @param string $stringAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setStringAttribute($stringAttribute)
    {
        $this->stringAttribute = $stringAttribute;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberAttribute()
    {
        return $this->numberAttribute;
    }

    /**
     * @param int $numberAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setNumberAttribute($numberAttribute)
    {
        $this->numberAttribute = $numberAttribute;
        return $this;
    }

    /**
     * @return array
     */
    public function getArrayAttribute()
    {
        return $this->arrayAttribute;
    }

    /**
     * @param array $arrayAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setArrayAttribute($arrayAttribute)
    {
        $this->arrayAttribute = $arrayAttribute;
        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getObjectAttribute()
    {
        return $this->objectAttribute;
    }

    /**
     * @param \stdClass $objectAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setObjectAttribute(\stdClass $objectAttribute)
    {
        $this->objectAttribute = $objectAttribute;
        return $this;
    }
}
