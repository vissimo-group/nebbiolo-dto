<?php

namespace Evino\Tests\Gallywix\DataTransfer\NFe;

use Evino\Gallywix\DataTransfer\Nfe\TIpi;
use PHPUnit\Framework\TestCase;

class TIpiTest extends TestCase
{
    public function testToNFeTagWithoutTribNorNT()
    {
        $sample = $this->sampleIPI();

        $expected = new \stdClass();
        $expected->cEnq = $sample->getCEnq();
        $expected->clEnq = $sample->getClEnq();
        $expected->CNPJProd = $sample->getCNPJProd();
        $expected->cSelo = $sample->getCSelo();
        $expected->qSelo = $sample->getQSelo();

        $actual = $sample->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithTrib()
    {
        $sampleTribIPI = $this->sampleTribIPI();

        $sampleIPI = $this->sampleIPI();
        $sampleIPI->setIPITrib($sampleTribIPI);

        $expected = new \stdClass();
        $expected->cEnq = $sampleIPI->getCEnq();
        $expected->clEnq = $sampleIPI->getClEnq();
        $expected->CNPJProd = $sampleIPI->getCNPJProd();
        $expected->cSelo = $sampleIPI->getCSelo();
        $expected->qSelo = $sampleIPI->getQSelo();

        $expected->vIPI = $sampleTribIPI->getVIPI();
        $expected->vBC = $sampleTribIPI->getVBC();
        $expected->CST = $sampleTribIPI->getCST();
        $expected->pIPI = $sampleTribIPI->getPIPI();
        $expected->qUnid = $sampleTribIPI->getQUnid();
        $expected->vUnid = $sampleTribIPI->getVUnid();

        $actual = $sampleIPI->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithNT()
    {
        $sampleNT = $this->sampleNT();

        $sampleIPI = $this->sampleIPI();
        $sampleIPI->setIPINT($sampleNT);

        $expected = new \stdClass();
        $expected->cEnq = $sampleIPI->getCEnq();
        $expected->clEnq = $sampleIPI->getClEnq();
        $expected->CNPJProd = $sampleIPI->getCNPJProd();
        $expected->cSelo = $sampleIPI->getCSelo();
        $expected->qSelo = $sampleIPI->getQSelo();
        $expected->CST = $sampleNT->getCST();

        $actual = $sampleIPI->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/

    /**
     * @return TIpi
     */
    private function sampleIPI()
    {
        $ipi = new TIpi();
        $ipi->setCEnq('cenq');
        $ipi->setClEnq('clenq');
        $ipi->setCNPJProd('66.810.333/0001-94');
        $ipi->setCSelo('cselo');
        $ipi->setQSelo('1');
        return $ipi;
    }

    /**
     * @return TIpi\IPITrib
     */
    private function sampleTribIPI()
    {
        $trib = new TIpi\IPITrib();
        $trib->setVIPI('10');
        $trib->setVBC('1');
        $trib->setCST('109S');
        $trib->setPIPI('100');
        $trib->setQUnid('1');
        $trib->setVUnid('200');
        return $trib;
    }

    private function sampleNT()
    {
        $nt = new TIpi\IPINT();
        $nt->setCST('1002S');
        return $nt;
    }
}