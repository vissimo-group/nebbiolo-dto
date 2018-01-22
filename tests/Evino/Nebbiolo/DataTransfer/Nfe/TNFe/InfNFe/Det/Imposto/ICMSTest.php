<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe\Det\Imposto;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;
use PHPUnit\Framework\TestCase;

class ICMSTest extends TestCase
{
    public function testToNFeTagWithExtrasAndWithoutAnyICMS()
    {
        $icms = new ICMS();

        $expected = new \stdClass();
        $expected->item = 1;
        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS00()
    {
        $icms00 = new ICMS\ICMS00();
        $icms00->setVBC('10');
        $icms00->setCST('00');
        $icms00->setModBC('0');
        $icms00->setOrig('1');
        $icms00->setPFCP('pFCP');
        $icms00->setVFCP('100');
        $icms00->setPICMS('pICMS');
        $icms00->setVICMS('10');

        $icms = new ICMS();
        $icms->setICMS00($icms00);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->vBC = $icms00->getVBC();
        $expected->CST = $icms00->getCST();
        $expected->modBC = $icms00->getModBC();
        $expected->orig = $icms00->getOrig();
        $expected->pFCP = $icms00->getPFCP();
        $expected->vFCP = $icms00->getVFCP();
        $expected->pICMS = $icms00->getPICMS();
        $expected->vICMS = $icms00->getVICMS();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS10()
    {
        $icms10 = new ICMS\ICMS10();
        $icms10->setVBC('10');
        $icms10->setCST('00');
        $icms10->setModBC('0');
        $icms10->setOrig('1');
        $icms10->setPFCP('pFCP');
        $icms10->setVFCP('100');
        $icms10->setPICMS('pICMS');
        $icms10->setVICMS('10');
        $icms10->setModBCST('bCST');
        $icms10->setPFCPST('pfCPST');
        $icms10->setPICMSST('pICMSST');
        $icms10->setPMVAST('pmVAST');
        $icms10->setPRedBCST('pRedBCST');
        $icms10->setVBCFCP('10');
        $icms10->setVBCFCPST('10');
        $icms10->setVBCST('10');
        $icms10->setVFCP('10');
        $icms10->setVFCPST('10');
        $icms10->setVICMSST('10');

        $icms = new ICMS();
        $icms->setICMS10($icms10);

        $expected = new \stdClass();

        $expected->item = 1;
        $expected->vBC = $icms10->getVBC();
        $expected->CST = $icms10->getCST();
        $expected->modBC = $icms10->getModBC();
        $expected->orig = $icms10->getOrig();
        $expected->pFCP = $icms10->getPFCP();
        $expected->vFCP = $icms10->getVFCP();
        $expected->pICMS = $icms10->getPICMS();
        $expected->vICMS = $icms10->getVICMS();
        $expected->modBCST = $icms10->getModBCST();
        $expected->pFCPST = $icms10->getPFCPST();
        $expected->pICMSST = $icms10->getPICMSST();
        $expected->pMVAST = $icms10->getPMVAST();
        $expected->pRedBCST = $icms10->getPRedBCST();
        $expected->vBCFCP = $icms10->getVBCFCP();
        $expected->vBCFCPST = $icms10->getVBCFCPST();
        $expected->vBCST = $icms10->getVBCST();
        $expected->vFCP = $icms10->getVFCP();
        $expected->vFCPST = $icms10->getVFCPST();
        $expected->vICMSST = $icms10->getVICMSST();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS20()
    {
        $icms20 = new ICMS\ICMS20();
        $icms20->setVBC('10');
        $icms20->setCST('00');
        $icms20->setModBC('0');
        $icms20->setOrig('1');
        $icms20->setPFCP('pFCP');
        $icms20->setVFCP('100');
        $icms20->setPICMS('pICMS');
        $icms20->setVICMS('10');
        $icms20->setVBCFCP('10');
        $icms20->setVFCP('10');
        $icms20->setMotDesICMS('motDesICMS');
        $icms20->setPRedBC('pRedBC');
        $icms20->setVICMSDeson('10');

        $icms = new ICMS();
        $icms->setICMS20($icms20);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->vBC = $icms20->getVBC();
        $expected->CST = $icms20->getCST();
        $expected->modBC = $icms20->getModBC();
        $expected->orig = $icms20->getOrig();
        $expected->pFCP = $icms20->getPFCP();
        $expected->vFCP = $icms20->getVFCP();
        $expected->pICMS = $icms20->getPICMS();
        $expected->vICMS = $icms20->getVICMS();
        $expected->vBCFCP = $icms20->getVBCFCP();
        $expected->vFCP = $icms20->getVFCP();
        $expected->motDesICMS = $icms20->getMotDesICMS();
        $expected->pRedBC = $icms20->getPRedBC();
        $expected->vICMSDeson = $icms20->getVICMSDeson();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS30()
    {
        $icms30 = new ICMS\ICMS30();
        $icms30->setCST('00');
        $icms30->setOrig('1');
        $icms30->setModBCST('bCST');
        $icms30->setPFCPST('pfCPST');
        $icms30->setPICMSST('pICMSST');
        $icms30->setPMVAST('pmVAST');
        $icms30->setPRedBCST('pRedBCST');
        $icms30->setVBCFCPST('10');
        $icms30->setVBCST('10');
        $icms30->setVFCPST('10');
        $icms30->setVICMSST('10');
        $icms30->setMotDesICMS('motDesICMS');
        $icms30->setVICMSDeson('10');

        $icms = new ICMS();
        $icms->setICMS30($icms30);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $icms30->getCST();
        $expected->orig = $icms30->getOrig();
        $expected->modBCST = $icms30->getModBCST();
        $expected->pFCPST = $icms30->getPFCPST();
        $expected->pICMSST = $icms30->getPICMSST();
        $expected->pMVAST = $icms30->getPMVAST();
        $expected->pRedBCST = $icms30->getPRedBCST();
        $expected->vBCFCPST = $icms30->getVBCFCPST();
        $expected->vBCST = $icms30->getVBCST();
        $expected->vFCPST = $icms30->getVFCPST();
        $expected->vICMSST = $icms30->getVICMSST();
        $expected->motDesICMS = $icms30->getMotDesICMS();
        $expected->vICMSDeson = $icms30->getVICMSDeson();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS40()
    {
        $icms40 = new ICMS\ICMS40();
        $icms40->setCST('00');
        $icms40->setOrig('1');
        $icms40->setMotDesICMS('motDesICMS');
        $icms40->setVICMSDeson('10');

        $icms = new ICMS();
        $icms->setICMS40($icms40);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $icms40->getCST();
        $expected->orig = $icms40->getOrig();
        $expected->motDesICMS = $icms40->getMotDesICMS();
        $expected->vICMSDeson = $icms40->getVICMSDeson();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS51()
    {
        $icms51 = new ICMS\ICMS51();
        $icms51->setVBC('10');
        $icms51->setCST('00');
        $icms51->setModBC('0');
        $icms51->setOrig('1');
        $icms51->setPFCP('pFCP');
        $icms51->setVFCP('100');
        $icms51->setPICMS('pICMS');
        $icms51->setVICMS('10');
        $icms51->setVBCFCP('10');
        $icms51->setVFCP('10');
        $icms51->setPRedBC('pRedBC');
        $icms51->setPDif('pDif');
        $icms51->setVICMSDif('10');
        $icms51->setVICMSOp('10');

        $icms = new ICMS();
        $icms->setICMS51($icms51);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->vBC = $icms51->getVBC();
        $expected->CST = $icms51->getCST();
        $expected->modBC = $icms51->getModBC();
        $expected->orig = $icms51->getOrig();
        $expected->pFCP = $icms51->getPFCP();
        $expected->vFCP = $icms51->getVFCP();
        $expected->pICMS = $icms51->getPICMS();
        $expected->vICMS = $icms51->getVICMS();
        $expected->vBCFCP = $icms51->getVBCFCP();
        $expected->vFCP = $icms51->getVFCP();
        $expected->pRedBC = $icms51->getPRedBC();
        $expected->pDif = $icms51->getPDif();
        $expected->vICMSDif = $icms51->getVICMSDif();
        $expected->vICMSOp = $icms51->getVICMSOp();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS60()
    {
        $icms60 = new ICMS\ICMS60();
        $icms60->setCST('00');
        $icms60->setOrig('1');
        $icms60->setPFCPSTRet('pFCPSTRet');
        $icms60->setPST('pST');
        $icms60->setVBCFCPSTRet('10');
        $icms60->setVBCSTRet('10');
        $icms60->setVFCPSTRet('10');
        $icms60->setVICMSSTRet('10');

        $icms = new ICMS();
        $icms->setICMS60($icms60);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $icms60->getCST();
        $expected->orig = $icms60->getOrig();
        $expected->pFCPSTRet = $icms60->getPFCPSTRet();
        $expected->pST = $icms60->getPST();
        $expected->vBCFCPSTRet = $icms60->getVBCFCPSTRet();
        $expected->vBCSTRet = $icms60->getVBCSTRet();
        $expected->vFCPSTRet = $icms60->getVFCPSTRet();
        $expected->vICMSSTRet = $icms60->getVICMSSTRet();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS70()
    {
        $icms70 = new ICMS\ICMS70();
        $icms70->setVBC('10');
        $icms70->setCST('00');
        $icms70->setModBC('0');
        $icms70->setOrig('1');
        $icms70->setPFCP('pFCP');
        $icms70->setVFCP('100');
        $icms70->setPICMS('pICMS');
        $icms70->setVICMS('10');
        $icms70->setModBCST('bCST');
        $icms70->setPFCPST('pfCPST');
        $icms70->setPICMSST('pICMSST');
        $icms70->setPMVAST('pmVAST');
        $icms70->setPRedBCST('pRedBCST');
        $icms70->setVBCFCP('10');
        $icms70->setVBCFCPST('10');
        $icms70->setVBCST('10');
        $icms70->setVFCP('10');
        $icms70->setVFCPST('10');
        $icms70->setVICMSST('10');
        $icms70->setMotDesICMS('motDesICMS');
        $icms70->setPRedBC('pRedBC');
        $icms70->setVICMSDeson('10');

        $icms = new ICMS();
        $icms->setICMS70($icms70);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->vBC = $icms70->getVBC();
        $expected->CST = $icms70->getCST();
        $expected->modBC = $icms70->getModBC();
        $expected->orig = $icms70->getOrig();
        $expected->pFCP = $icms70->getPFCP();
        $expected->vFCP = $icms70->getVFCP();
        $expected->pICMS = $icms70->getPICMS();
        $expected->vICMS = $icms70->getVICMS();
        $expected->modBCST = $icms70->getModBCST();
        $expected->pFCPST = $icms70->getPFCPST();
        $expected->pICMSST = $icms70->getPICMSST();
        $expected->pMVAST = $icms70->getPMVAST();
        $expected->pRedBCST = $icms70->getPRedBCST();
        $expected->vBCFCP = $icms70->getVBCFCP();
        $expected->vBCFCPST = $icms70->getVBCFCPST();
        $expected->vBCST = $icms70->getVBCST();
        $expected->vFCP = $icms70->getVFCP();
        $expected->vFCPST = $icms70->getVFCPST();
        $expected->vICMSST = $icms70->getVICMSST();
        $expected->motDesICMS = $icms70->getMotDesICMS();
        $expected->pRedBC = $icms70->getPRedBC();
        $expected->vICMSDeson = $icms70->getVICMSDeson();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndICMS90()
    {
        $icms90 = new ICMS\ICMS90();
        $icms90->setVBC('10');
        $icms90->setCST('00');
        $icms90->setModBC('0');
        $icms90->setOrig('1');
        $icms90->setPFCP('pFCP');
        $icms90->setVFCP('100');
        $icms90->setPICMS('pICMS');
        $icms90->setVICMS('10');
        $icms90->setModBCST('bCST');
        $icms90->setPFCPST('pfCPST');
        $icms90->setPICMSST('pICMSST');
        $icms90->setPMVAST('pmVAST');
        $icms90->setPRedBCST('pRedBCST');
        $icms90->setVBCFCP('10');
        $icms90->setVBCFCPST('10');
        $icms90->setVBCST('10');
        $icms90->setVFCP('10');
        $icms90->setVFCPST('10');
        $icms90->setVICMSST('10');
        $icms90->setMotDesICMS('motDesICMS');
        $icms90->setPRedBC('pRedBC');
        $icms90->setVICMSDeson('10');

        $icms = new ICMS();
        $icms->setICMS90($icms90);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->vBC = $icms90->getVBC();
        $expected->CST = $icms90->getCST();
        $expected->modBC = $icms90->getModBC();
        $expected->orig = $icms90->getOrig();
        $expected->pFCP = $icms90->getPFCP();
        $expected->vFCP = $icms90->getVFCP();
        $expected->pICMS = $icms90->getPICMS();
        $expected->vICMS = $icms90->getVICMS();
        $expected->modBCST = $icms90->getModBCST();
        $expected->pFCPST = $icms90->getPFCPST();
        $expected->pICMSST = $icms90->getPICMSST();
        $expected->pMVAST = $icms90->getPMVAST();
        $expected->pRedBCST = $icms90->getPRedBCST();
        $expected->vBCFCP = $icms90->getVBCFCP();
        $expected->vBCFCPST = $icms90->getVBCFCPST();
        $expected->vBCST = $icms90->getVBCST();
        $expected->vFCP = $icms90->getVFCP();
        $expected->vFCPST = $icms90->getVFCPST();
        $expected->vICMSST = $icms90->getVICMSST();
        $expected->motDesICMS = $icms90->getMotDesICMS();
        $expected->pRedBC = $icms90->getPRedBC();
        $expected->vICMSDeson = $icms90->getVICMSDeson();

        $actual = $icms->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithoutAnyICMSSN()
    {
        $icms = new ICMS();

        $expected = null;
        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN101()
    {
        $icmssn101 = new ICMS\ICMSSN101();
        $icmssn101->setOrig('1');
        $icmssn101->setCSOSN('cSOSN');
        $icmssn101->setPCredSN('pCredSN');
        $icmssn101->setVCredICMSSN('10');

        $icms = new ICMS();
        $icms->setICMSSN101($icmssn101);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn101->getOrig();
        $expected->cSOSN = $icmssn101->getCSOSN();
        $expected->pCredSN = $icmssn101->getPCredSN();
        $expected->vCredICMSSN = $icmssn101->getVCredICMSSN();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN102()
    {
        $icmssn102 = new ICMS\ICMSSN102();
        $icmssn102->setOrig('1');
        $icmssn102->setCSOSN('cSOSN');

        $icms = new ICMS();
        $icms->setICMSSN102($icmssn102);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn102->getOrig();
        $expected->cSOSN = $icmssn102->getCSOSN();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN201()
    {
        $icmssn201 = new ICMS\ICMSSN201();
        $icmssn201->setOrig('1');
        $icmssn201->setCSOSN('cSOSN');
        $icmssn201->setPCredSN('pCredSN');
        $icmssn201->setVCredICMSSN('10');
        $icmssn201->setVICMSST('10');
        $icmssn201->setVFCPST('10');
        $icmssn201->setVBCST('10');
        $icmssn201->setVBCFCPST('10');
        $icmssn201->setPRedBCST('pRedBCST');
        $icmssn201->setPMVAST('pMVAST');
        $icmssn201->setPICMSST('pICMSST');
        $icmssn201->setPFCPST('pFCPST');
        $icmssn201->setModBCST('1');

        $icms = new ICMS();
        $icms->setICMSSN201($icmssn201);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn201->getOrig();
        $expected->cSOSN = $icmssn201->getCSOSN();
        $expected->pCredSN = $icmssn201->getPCredSN();
        $expected->vCredICMSSN = $icmssn201->getVCredICMSSN();
        $expected->vICMSST = $icmssn201->getVICMSST();
        $expected->vFCPST = $icmssn201->getVFCPST();
        $expected->vBCST = $icmssn201->getVBCST();
        $expected->vBCFCPST = $icmssn201->getVBCFCPST();
        $expected->pRedBCST = $icmssn201->getPRedBCST();
        $expected->pMVAST = $icmssn201->getPMVAST();
        $expected->pICMSST = $icmssn201->getPICMSST();
        $expected->pFCPST = $icmssn201->getPFCPST();
        $expected->modBCST = $icmssn201->getModBCST();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN202()
    {
        $icmssn202 = new ICMS\ICMSSN202();
        $icmssn202->setOrig('1');
        $icmssn202->setCSOSN('cSOSN');
        $icmssn202->setVICMSST('10');
        $icmssn202->setVFCPST('10');
        $icmssn202->setVBCST('10');
        $icmssn202->setVBCFCPST('10');
        $icmssn202->setPRedBCST('pRedBCST');
        $icmssn202->setPMVAST('pMVAST');
        $icmssn202->setPICMSST('pICMSST');
        $icmssn202->setPFCPST('pFCPST');
        $icmssn202->setModBCST('1');

        $icms = new ICMS();
        $icms->setICMSSN202($icmssn202);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn202->getOrig();
        $expected->cSOSN = $icmssn202->getCSOSN();
        $expected->vICMSST = $icmssn202->getVICMSST();
        $expected->vFCPST = $icmssn202->getVFCPST();
        $expected->vBCST = $icmssn202->getVBCST();
        $expected->vBCFCPST = $icmssn202->getVBCFCPST();
        $expected->pRedBCST = $icmssn202->getPRedBCST();
        $expected->pMVAST = $icmssn202->getPMVAST();
        $expected->pICMSST = $icmssn202->getPICMSST();
        $expected->pFCPST = $icmssn202->getPFCPST();
        $expected->modBCST = $icmssn202->getModBCST();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN500()
    {
        $icmssn500 = new ICMS\ICMSSN500();
        $icmssn500->setOrig('1');
        $icmssn500->setCSOSN('cSOSN');
        $icmssn500->setVICMSSTRet('10');
        $icmssn500->setVFCPSTRet('10');
        $icmssn500->setVBCSTRet('10');
        $icmssn500->setVBCFCPSTRet('10');
        $icmssn500->setPST('pST');
        $icmssn500->setPFCPSTRet('pFCPSTRet');

        $icms = new ICMS();
        $icms->setICMSSN500($icmssn500);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn500->getOrig();
        $expected->cSOSN = $icmssn500->getCSOSN();
        $expected->vICMSSTRet = $icmssn500->getVICMSSTRet();
        $expected->vFCPSTRet = $icmssn500->getVFCPSTRet();
        $expected->vBCSTRet = $icmssn500->getVBCSTRet();
        $expected->vBCFCPSTRet = $icmssn500->getVBCFCPSTRet();
        $expected->pST = $icmssn500->getPST();
        $expected->pFCPSTRet = $icmssn500->getPFCPSTRet();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }

    public function testGetTagICMSSNWithICMSSN900()
    {
        $icmssn900 = new ICMS\ICMSSN900();
        $icmssn900->setOrig('1');
        $icmssn900->setCSOSN('cSOSN');
        $icmssn900->setPCredSN('pCredSN');
        $icmssn900->setVCredICMSSN('10');
        $icmssn900->setVICMSST('10');
        $icmssn900->setVFCPST('10');
        $icmssn900->setVBCST('10');
        $icmssn900->setVBCFCPST('10');
        $icmssn900->setPRedBCST('pRedBCST');
        $icmssn900->setPMVAST('pMVAST');
        $icmssn900->setPICMSST('pICMSST');
        $icmssn900->setPFCPST('pFCPST');
        $icmssn900->setModBCST('1');

        $icms = new ICMS();
        $icms->setICMSSN900($icmssn900);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->orig = $icmssn900->getOrig();
        $expected->cSOSN = $icmssn900->getCSOSN();
        $expected->pCredSN = $icmssn900->getPCredSN();
        $expected->vCredICMSSN = $icmssn900->getVCredICMSSN();
        $expected->vICMSST = $icmssn900->getVICMSST();
        $expected->vFCPST = $icmssn900->getVFCPST();
        $expected->vBCST = $icmssn900->getVBCST();
        $expected->vBCFCPST = $icmssn900->getVBCFCPST();
        $expected->pRedBCST = $icmssn900->getPRedBCST();
        $expected->pMVAST = $icmssn900->getPMVAST();
        $expected->pICMSST = $icmssn900->getPICMSST();
        $expected->pFCPST = $icmssn900->getPFCPST();
        $expected->modBCST = $icmssn900->getModBCST();

        $actual = $icms->getTagICMSSNWithItemNumber(1);

        $this->assertEquals($expected, $actual);
    }
}
