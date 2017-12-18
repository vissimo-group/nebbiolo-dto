<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe\Det\Imposto;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS;
use PHPUnit\Framework\TestCase;

class COFINSTest extends TestCase
{

    public function testToNFeTagWithRootValues()
    {
        $cofins = new COFINS();

        $expected = new \stdClass();
        $actual = $cofins->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagAliq()
    {
        $aliq = new COFINS\COFINSAliq();
        $aliq->setCST('01');
        $aliq->setPCOFINS('pCOFINS');
        $aliq->setVBC('100');
        $aliq->setVCOFINS('1000');

        $cofins = new COFINS();
        $cofins->setCOFINSAliq($aliq);

        $expected = new \stdClass();
        $expected->CST = $aliq->getCST();
        $expected->pCOFINS = $aliq->getPCOFINS();
        $expected->vBC = $aliq->getVBC();
        $expected->vCOFINS = $aliq->getVCOFINS();

        $actual = $cofins->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagQtde()
    {
        $qtde = new COFINS\COFINSQtde();
        $qtde->setVCOFINS('2000');
        $qtde->setCST('02');
        $qtde->setQBCProd('20');
        $qtde->setVAliqProd('2');

        $cofins = new COFINS();
        $cofins->setCOFINSQtde($qtde);

        $expected = new \stdClass();
        $expected->vCOFINS = $qtde->getVCOFINS();
        $expected->CST = $qtde->getCST();
        $expected->qBCProd = $qtde->getQBCProd();
        $expected->vAliqProd = $qtde->getVAliqProd();

        $actual = $cofins->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagNT()
    {
        $nt = new COFINS\COFINSNT();
        $nt->setCST('03');

        $cofins = new COFINS();
        $cofins->setCOFINSNT($nt);

        $expected = new \stdClass();
        $expected->CST = $nt->getCST();

        $actual = $cofins->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagOutr()
    {
        $outr = new COFINS\COFINSOutr();
        $outr->setCST('04');
        $outr->setVAliqProd('4');
        $outr->setQBCProd('40');
        $outr->setVCOFINS('4000');
        $outr->setVBC('400');
        $outr->setPCOFINS('pCOFINS');

        $cofins = new COFINS();
        $cofins->setCOFINSOutr($outr);

        $expected = new \stdClass();
        $expected->CST = $outr->getCST();
        $expected->vAliqProd = $outr->getVAliqProd();
        $expected->qBCProd = $outr->getQBCProd();
        $expected->vCOFINS = $outr->getVCOFINS();
        $expected->vBC = $outr->getVBC();
        $expected->pCOFINS = $outr->getPCOFINS();

        $actual = $cofins->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

}
