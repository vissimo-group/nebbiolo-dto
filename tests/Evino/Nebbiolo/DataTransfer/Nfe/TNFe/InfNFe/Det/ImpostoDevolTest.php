<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe\Det;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol;
use PHPUnit\Framework\TestCase;

class ImpostoDevolTest extends TestCase
{
    public function testToNFeTagWithoutIPIDevol()
    {
        $devol = new ImpostoDevol();
        $devol->setPDevol('pDevol');

        $expected = new \stdClass();
        $expected->pDevol = $devol->getPDevol();

        $actual = $devol->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithIPIDevol()
    {
        $ipiDevol = new ImpostoDevol\IPI();
        $ipiDevol->setVIPIDevol('1000');

        $devol = new ImpostoDevol();
        $devol->setPDevol('pDevol');
        $devol->setIPI($ipiDevol);

        $expected = new \stdClass();
        $expected->pDevol = $devol->getPDevol();
        $expected->vIPIDevol = $ipiDevol->getVIPIDevol();

        $actual = $devol->toNFeTag();

        $this->assertEquals($expected, $actual);
    }
}
