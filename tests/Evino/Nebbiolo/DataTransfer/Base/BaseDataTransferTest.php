<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\Base;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;
use PHPUnit\Framework\TestCase;

/**
 * Class BaseNebbioloDataTransferTest
 * @package Evino\Tests\Nebbiolo\DataTransfer\Base
 */
final class BaseDataTransferTest extends TestCase
{
    /**
     * @return void
     * @throws \JsonMapper_Exception
     */
    public function testCanInstantiateFromValidJsonObject()
    {
        $json = json_decode($this->sampleJsonString());

        /** @var BaseDataTransferTestClass $dt */
        $dt = BaseDataTransferTestClass::fromJsonObject($json);

        $this->assertEquals($this->sampleDT(), $dt);
    }

    /**
     * @return void
     * @throws \JsonMapper_Exception
     */
    public function testCanInstantiateFromValidJsonString()
    {
        $json = $this->sampleJsonString();

        /** @var BaseDataTransferTestClass $dt */
        $dt = BaseDataTransferTestClass::fromJsonString($json);

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

        $actualNFeTag = $this->sampleDT()->toNFeTag();

        $this->assertEquals($expectedNFeTag, $actualNFeTag);
    }

    /**
     * @return void
     */
    public function testToNFeTagWithItemNumber()
    {
        $expectedNFeTag = new \stdClass();
        $expectedNFeTag->stringAttribute = $this->sampleStringAttribute;
        $expectedNFeTag->numberAttribute = $this->sampleNumberAttribute;

        $actualNFeTag = $this->sampleDT()->toNFeTagWithItemNumber(1);
        $expectedNFeTag->item = 1;

        $this->assertEquals($expectedNFeTag, $actualNFeTag);
    }

    /**
     * @return void
     */
    public function testToNFeTagWithExtras()
    {
        $expectedNFeTag = new \stdClass();
        $expectedNFeTag->stringAttribute = $this->sampleStringAttribute;
        $expectedNFeTag->numberAttribute = $this->sampleNumberAttribute;

        $actualNFeTag = $this->sampleDT()->toNFeTagWithExtras(['item' => 1, 'key1' => 'value1', 'key2' => 19]);
        $expectedNFeTag->item = 1;
        $expectedNFeTag->key1 = 'value1';
        $expectedNFeTag->key2 = 19;

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

        $actualOutput = BaseDataTransferTestClass::stripNullValuesFromArray($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/

    /** @var string */
    private $sampleStringAttribute = "trade prince nebbiolo";

    /** @var int */
    private $sampleNumberAttribute = 19;

    /** @var array */
    private $sampleArrayAttribute = ["trade", "prince", "nebbiolo"];

    /**
     * @return \stdClass
     */
    private function sampleObjectAttribute()
    {
        $obj = new \stdClass();
        $obj->name = "trade prince nebbiolo";

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
     * @return BaseDataTransferTestClass
     */
    private function sampleDT()
    {
        $dt = new BaseDataTransferTestClass();

        $dt->setStringAttribute($this->sampleStringAttribute);
        $dt->setNumberAttribute($this->sampleNumberAttribute);
        $dt->setArrayAttribute($this->sampleArrayAttribute);
        $dt->setObjectAttribute($this->sampleObjectAttribute());

        return $dt;
    }
}

/**
 * Class BaseNebbioloDataTransferTestClass
 * @package Evino\Tests\Nebbiolo\DataTransfer\Base
 */
class BaseDataTransferTestClass extends BaseDataTransfer
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
     * @return BaseDataTransferTestClass
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
     * @return BaseDataTransferTestClass
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
     * @return BaseDataTransferTestClass
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
     * @return BaseDataTransferTestClass
     */
    public function setObjectAttribute(\stdClass $objectAttribute)
    {
        $this->objectAttribute = $objectAttribute;
        return $this;
    }
}
