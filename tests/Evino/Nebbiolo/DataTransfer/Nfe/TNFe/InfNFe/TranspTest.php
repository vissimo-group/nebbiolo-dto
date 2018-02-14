<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Transp;
use Evino\Nebbiolo\DataTransfer\Nfe\TVeiculo;
use PHPUnit\Framework\TestCase;

final class TranspTest extends TestCase
{
    public function testGetTagReboqueWithoutInfo()
    {
        $transp = new Transp();
        $transp->setBalsa('balsa');

        $expected = null;
        $actual = $transp->getTagReboque();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagReboque()
    {
        $reboqueArray = array();

        for ($i = 0; $i < 3; $i++) {
            $reboque = new TVeiculo();
            $reboque->setPlaca('PHP-201' . $i);
            $reboque->setRNTC('RNTC');
            $reboque->setUF('SP');

            $reboqueArray[] = $reboque;
        }

        $transp = new Transp();
        $transp->setReboque($reboqueArray);
        $transp->setBalsa('balsa');
        $transp->setVagao('vagao');

        /** @var TVeiculo $reboque0 */
        $reboque0 = $reboqueArray[0];

        $expected = new \stdClass();
        $expected->placa = $reboque0->getPlaca();
        $expected->RNTC = $reboque0->getRNTC();
        $expected->UF = $reboque0->getUF();
        $expected->balsa = $transp->getBalsa();
        $expected->vagao = $transp->getVagao();

        $actual = $transp->getTagReboque();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsVolNoVols()
    {
        $transp = new Transp();

        $expected = null;
        $actual = $transp->getTagsVol();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsVol()
    {
        $volArray = array();
        for ($i = 0; $i < 10; $i++) {
            $vol = new Transp\Vol();
            $vol->setEsp('Esp');
            $vol->setMarca('marca');
            $vol->setNVol($i+1);
            $vol->setPesoB('10');
            $vol->setPesoL('20');
            $vol->setQVol('qVol');

            $volArray[] = $vol;
        }

        $transp = new Transp();
        $transp->setVol($volArray);

        $expected = array();

        /** @var Transp\Vol $vol */
        foreach ($volArray as $vol) {
            $expectedStd = new \stdClass();
            $expectedStd->esp = $vol->getEsp();
            $expectedStd->marca = $vol->getMarca();
            $expectedStd->nVol = $vol->getNVol();
            $expectedStd->pesoB = $vol->getPesoB();
            $expectedStd->pesoL = $vol->getPesoL();
            $expectedStd->qVol = $vol->getQVol();

            $expected[] = $expectedStd;
        }

        $actual = $transp->getTagsVol();

        $this->assertEquals($expected, $actual);
    }
}
