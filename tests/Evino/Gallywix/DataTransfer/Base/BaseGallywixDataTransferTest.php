<?php

namespace Evino\Tests\Gallywix\DataTransfer\Base;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use PHPUnit\Framework\TestCase;

final class BaseGallywixDataTransferTest extends TestCase
{

    public function testCanInstantiateFromValidJsonObject(): void
    {
        $json = json_decode($this->sampleJsonString());

        /** @var BaseGallywixDataTransferTestClass $dt */
        $dt = BaseGallywixDataTransferTestClass::fromJsonObject($json);

        $this->assertEquals($this->sampleDT(), $dt);
    }

    public function testCanInstantiateFromValidJsonString(): void
    {
        $json = $this->sampleJsonString();

        /** @var BaseGallywixDataTransferTestClass $dt */
        $dt = BaseGallywixDataTransferTestClass::fromJsonString($json);

        $this->assertEquals($this->sampleDT(), $dt);
    }

    public function testJsonSerialize(): void
    {
        $expectedJsonSerialize = [
            "stringAttribute" => "trade prince gallywix",
            "numberAttribute" => 19,
            "arrayAttribute" => ["trade", "prince", "gallywix"],
            "objectAttribute" => $this->sampleObjectAttribute()
        ];

        $actualJsonSerialize = $this->sampleDT()->jsonSerialize();

        $this->assertEquals($expectedJsonSerialize, $actualJsonSerialize);
    }

    public function testToNFeTag(): void
    {
        $expectedNFeTag = new \stdClass();
        $expectedNFeTag->stringAttribute = $this->sampleStringAttribute;
        $expectedNFeTag->numberAttribute = $this->sampleNumberAttribute;
        $expectedNFeTag->arrayAttribute = $this->sampleArrayAttribute;

        $actualNFeTag = $this->sampleDT()->toNFeTag();

        $this->assertEquals($expectedNFeTag, $actualNFeTag);
    }

    public function testStripNullValuesFromArray(): void
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
    private function sampleObjectAttribute(): \stdClass
    {
        $obj = new \stdClass();
        $obj->name = "trade prince gallywix";

        return $obj;
    }

    /**
     * @return string
     */
    private function sampleJsonString(): string
    {

        return "{\"stringAttribute\": \"{$this->sampleStringAttribute}\",
            \"numberAttribute\": {$this->sampleNumberAttribute},
            \"arrayAttribute\": [
                \"{$this->sampleArrayAttribute[0]}\",
                \"{$this->sampleArrayAttribute[1]}\",
                \"{$this->sampleArrayAttribute[2]}\"
            ],
            \"objectAttribute\": {\"name\": \"{$this->sampleObjectAttribute()->name}\"}}";
    }

    /**
     * @return BaseGallywixDataTransferTestClass
     */
    private function sampleDT(): BaseGallywixDataTransferTestClass
    {
        $dt = new BaseGallywixDataTransferTestClass();

        $dt->setStringAttribute($this->sampleStringAttribute);
        $dt->setNumberAttribute($this->sampleNumberAttribute);
        $dt->setArrayAttribute($this->sampleArrayAttribute);
        $dt->setObjectAttribute($this->sampleObjectAttribute());

        return $dt;
    }
}

class BaseGallywixDataTransferTestClass extends BaseGallywixDataTransfer {
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
    public static function stripNullValuesFromArray(array $array): array
    {
        return parent::stripNullValuesFromArray($array); // TODO: Change the autogenerated stub
    }

    /**
     * @return string
     */
    public function getStringAttribute(): string
    {
        return $this->stringAttribute;
    }

    /**
     * @param string $stringAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setStringAttribute(string $stringAttribute): BaseGallywixDataTransferTestClass
    {
        $this->stringAttribute = $stringAttribute;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberAttribute(): int
    {
        return $this->numberAttribute;
    }

    /**
     * @param int $numberAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setNumberAttribute(int $numberAttribute): BaseGallywixDataTransferTestClass
    {
        $this->numberAttribute = $numberAttribute;
        return $this;
    }

    /**
     * @return array
     */
    public function getArrayAttribute(): array
    {
        return $this->arrayAttribute;
    }

    /**
     * @param array $arrayAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setArrayAttribute(array $arrayAttribute): BaseGallywixDataTransferTestClass
    {
        $this->arrayAttribute = $arrayAttribute;
        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getObjectAttribute(): \stdClass
    {
        return $this->objectAttribute;
    }

    /**
     * @param \stdClass $objectAttribute
     * @return BaseGallywixDataTransferTestClass
     */
    public function setObjectAttribute(\stdClass $objectAttribute): BaseGallywixDataTransferTestClass
    {
        $this->objectAttribute = $objectAttribute;
        return $this;
    }
}
