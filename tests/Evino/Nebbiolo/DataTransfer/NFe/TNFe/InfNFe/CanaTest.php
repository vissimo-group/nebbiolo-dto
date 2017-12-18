<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Cana;
use PHPUnit\Framework\TestCase;

class CanaTest extends TestCase
{
    public function testGetTagsForDiaNoTags()
    {
        $cana = new Cana();

        $expected = null;
        $actual = $cana->getTagsForDia();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsForDiaOneTag()
    {
        $forDia = new Cana\ForDia();
        $forDia->setDia(1);
        $forDia->setQtde(10);

        $cana = new Cana();
        $cana->setForDia(array($forDia));

        $expectedStd = new \stdClass();
        $expectedStd->dia = $forDia->getDia();
        $expectedStd->qtde = $forDia->getQtde();

        $expected = array();
        $expected[] = $expectedStd;

        $actual = $cana->getTagsForDia();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsForDiaMultipleTags()
    {
        $forDiaArray = array();

        for ($i = 0; $i < 10; $i++) {
            $forDia = new Cana\ForDia();
            $forDia->setDia($i+1);
            $forDia->setQtde($forDia->getDia()*100);

            $forDiaArray[] = $forDia;
        }

        $cana = new Cana();
        $cana->setForDia($forDiaArray);

        $expected = array();
        for ($i = 0; $i < count($forDiaArray); $i++) {
            /** @var Cana\ForDia $forDia */
            $forDia = $forDiaArray[$i];

            $expectedStd = new \stdClass();
            $expectedStd->dia = $forDia->getDia();
            $expectedStd->qtde = $forDia->getQtde();

            $expected[] = $expectedStd;
        }

        $actual = $cana->getTagsForDia();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDeducNoTags()
    {
        $cana = new Cana();

        $expected = null;
        $actual = $cana->getTagsDeduc();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDeducOneTag()
    {
        $deduc = new Cana\Deduc();
        $deduc->setVDed('100');
        $deduc->setXDed('dunno');

        $cana = new Cana();
        $cana->setDeduc(array($deduc));

        $expectedStd = new \stdClass();
        $expectedStd->vDed = $deduc->getVDed();
        $expectedStd->xDed = $deduc->getXDed();

        $expected = array();
        $expected[] = $expectedStd;

        $actual = $cana->getTagsDeduc();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDeducMultipleTags()
    {
        $deducArray = array();

        for ($i = 0; $i < 10; $i++) {
            $deduc = new Cana\Deduc();
            $deduc->setVDed(($i+1)*10);
            $deduc->setXDed('Deduc ' . ($i+1));

            $deducArray[] = $deduc;
        }

        $cana = new Cana();
        $cana->setDeduc($deducArray);

        $expected = array();
        for ($i = 0; $i < count($deducArray); $i++) {
            /** @var Cana\Deduc $deduc */
            $deduc = $deducArray[$i];

            $expectedStd = new \stdClass();
            $expectedStd->vDed = $deduc->getVDed();
            $expectedStd->xDed = $deduc->getXDed();

            $expected[] = $expectedStd;
        }

        $actual = $cana->getTagsDeduc();

        $this->assertEquals($expected, $actual);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/
}
