<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det;
use PHPUnit\Framework\TestCase;

class DetTest extends TestCase
{
    public function testGetTagInfAdProdNoInf()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagInfAdProd();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagInfAdProd()
    {
        $det = new Det();

        $det->setNItem(19);
        $det->setInfAdProd('InfAdProd');

        $expected = new \stdClass();
        $expected->item = $det->getNItem();
        $expected->infAdProd = $det->getInfAdProd();

        $actual = $det->getTagInfAdProd();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsNVENoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagsNVE();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsNVENoNVE()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagsNVE();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsNVE()
    {
        $nveArray = array();

        for ($i = 0; $i < 10; $i++) {
            $nve = 'NVE ' . ($i + 1);
            $nveArray[] = $nve;
        }

        $prod = new Det\Prod();
        $prod->setNVE($nveArray);

        $det = new Det();
        $det->setNItem(19);
        $det->setProd($prod);

        $expected = array();
        foreach ($nveArray as $nve) {
            $expectedStd = new \stdClass();
            $expectedStd->item = $det->getNItem();
            $expectedStd->NVE = $nve;

            $expected[] = $expectedStd;
        }

        $actual = $det->getTagsNVE();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagCESTNoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagCEST();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagCEST()
    {
        $prod = new Det\Prod();

        $prod->setCEST('10088212');
        $prod->setIndEscala('10');
        $prod->setCNPJFab('16.715.134/0001-29');

        $det = new Det();
        $det->setNItem(22);
        $det->setProd($prod);

        $expected = new \stdClass();
        $expected->item = $det->getNItem();
        $expected->CEST = $prod->getCEST();
        $expected->indEscala = $prod->getIndEscala();
        $expected->CNPJFab = $prod->getCNPJFab();

        $actual = $det->getTagCEST();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRECOPINoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagRECOPI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRECOPINoNRECOPI()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagRECOPI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRECOPI()
    {
        $prod = new Det\Prod();
        $prod->setNRECOPI('18271398231');

        $det = new Det();
        $det->setNItem(17);
        $det->setProd($prod);

        $expected = new \stdClass();
        $expected->item = $det->getNItem();
        $expected->nRECOPI = $prod->getNRECOPI();

        $actual = $det->getTagRECOPI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDINoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagsDI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDINoDI()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagsDI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsDI()
    {
        $diArray = array();

        for ($i = 0; $i < 10; $i++) {
            $di = new Det\Prod\DI();
            $di->setNDI($i+1);
            $di->setDDI('1');
            $di->setXLocDesemb('São Paulo');
            $di->setUFDesemb('SP');
            $di->setDDesemb('12321');
            $di->setTpViaTransp('AEREO');
            $di->setVAFRMM('212231');
            $di->setTpIntermedio('asndao');
            $di->setCNPJ('16.715.134/0001-29');
            $di->setUFTerceiro('RJ');
            $di->setCExportador('Someone');

            $diArray[] = $di;
        }

        $prod = new Det\Prod();
        $prod->setDI($diArray);

        $det = new Det();
        $det->setNItem(10);
        $det->setProd($prod);

        $expected = array();

        /** @var Det\Prod\DI $di */
        foreach ($diArray as $di) {
            $expectedStd = new \stdClass();
            $expectedStd->item = $det->getNItem();
            $expectedStd->nDI = $di->getNDI();
            $expectedStd->dDI = $di->getDDI();
            $expectedStd->xLocDesemb = $di->getXLocDesemb();
            $expectedStd->UFDesemb = $di->getUFDesemb();
            $expectedStd->dDesemb = $di->getDDesemb();
            $expectedStd->tpViaTransp = $di->getTpViaTransp();
            $expectedStd->vAFRMM = $di->getVAFRMM();
            $expectedStd->tpIntermedio = $di->getTpIntermedio();
            $expectedStd->CNPJ = $di->getCNPJ();
            $expectedStd->UFTerceiro = $di->getUFTerceiro();
            $expectedStd->cExportador = $di->getCExportador();

            $expected[] = $expectedStd;
        }

        $actual = $det->getTagsDI();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsAdiNoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagsAdi();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsAdiNoDI()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagsAdi();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsAdiNoADI()
    {
        $diArray = array();

        for ($i = 0; $i < 10; $i++) {
            $diArray[] = new Det\Prod\DI();
        }

        $prod = new Det\Prod();
        $prod->setDI($diArray);

        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagsAdi();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagsAdi()
    {
        $diArray = array();

        for ($i = 0; $i < 10; $i += 2) {
            $adiArray = array();

            for ($j = 0; $j < 3; $j++) {
                $adi = new Det\Prod\DI\Adi();
                $adi->setCFabricante('CFabricante');
                $adi->setNAdicao($j);
                $adi->setNDraw($j*10);
                $adi->setNSeqAdic($j+(10*$i));
                $adi->setVDescDI(($j+1)*100);

                $adiArray[] = $adi;
            }

            $di = new Det\Prod\DI();
            $di->setNDI($i+1);
            $di->setAdi($adiArray);

            $diArray[] = $di;
        }

        $prod = new Det\Prod();
        $prod->setDI($diArray);

        $det = new Det();
        $det->setNItem(22);
        $det->setProd($prod);

        $expected = array();
        for ($i = 0; $i < count($diArray); $i++) {
            /** @var Det\Prod\DI $di */
            $di = $diArray[$i];

            /** @var Det\Prod\DI\Adi $adi */
            foreach ($di->getAdi() as $adi) {
                $expectedStd = new \stdClass();

                $expectedStd->cFabricante = $adi->getCFabricante();
                $expectedStd->nAdicao = $adi->getNAdicao();
                $expectedStd->nDraw = $adi->getNDraw();
                $expectedStd->nSeqAdic = $adi->getNSeqAdic();
                $expectedStd->vDescDI = $adi->getVDescDI();

                $expectedStd->item = $det->getNItem();
                $expectedStd->nDI = $di->getNDI();

                $expected[] = $expectedStd;
            }
        }

        $actual = $det->getTagsAdi();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagDetExportNoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagDetExport();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagDetExportNoDetExport()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagDetExport();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagDetExport()
    {
        $detExportArray = array();
        for ($i = 0; $i < 3; $i++) {
            $detExport = new Det\Prod\DetExport();
            $detExport->setNDraw($i+1);

            $detExportArray[] = $detExport;
        }

        $prod = new Det\Prod();
        $prod->setDetExport($detExportArray);

        $det = new Det();
        $det->setNItem(19);
        $det->setProd($prod);

        $expected = new \stdClass();
        $expected->item = $det->getNItem();
        $expected->nDraw = 1;

        $actual = $det->getTagDetExport();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRastroNoProd()
    {
        $det = new Det();

        $expected = null;
        $actual = $det->getTagRastro();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRastroNoRastro()
    {
        $prod = new Det\Prod();
        $det = new Det();
        $det->setProd($prod);

        $expected = null;
        $actual = $det->getTagRastro();

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagRastro()
    {
        $rastroArray = array();
        for ($i = 0; $i < 10; $i++) {
            $rastro = new Det\Prod\Rastro();
            $rastro->setCAgreg('CAgreg');
            $rastro->setDFab('12/12/2017');
            $rastro->setDVal('12/12/2019');
            $rastro->setNLote($i+1);
            $rastro->setQLote(($i+1)*10);

            $rastroArray[] = $rastro;
        }

        $prod = new Det\Prod();
        $prod->setRastro($rastroArray);

        $det = new Det();
        $det->setNItem(55);
        $det->setProd($prod);

        $expected = array();

        /** @var Det\Prod\Rastro $rastro */
        foreach ($rastroArray as $rastro) {
            $expectedStd = new \stdClass();
            $expectedStd->cAgreg = $rastro->getCAgreg();
            $expectedStd->dFab = $rastro->getDFab();
            $expectedStd->dVal = $rastro->getDVal();
            $expectedStd->nLote = $rastro->getNLote();
            $expectedStd->qLote = $rastro->getQLote();
            $expectedStd->item = $det->getNItem();

            $expected[] = $expectedStd;
        }

        $actual = $det->getTagRastro();

        $this->assertEquals($expected, $actual);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/
}
