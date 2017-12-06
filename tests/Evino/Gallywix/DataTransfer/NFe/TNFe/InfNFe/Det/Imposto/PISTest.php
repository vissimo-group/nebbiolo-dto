<?php

namespace Evino\Tests\Gallywix\DataTransfer\NFe\TNFe\InfNFe\Det\Imposto;

use Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS;
use PHPUnit\Framework\TestCase;

class PISTest extends TestCase
{

    public function testToNFeTagWithExtrasAndWithoutAnyPIS()
    {
        $pis = new PIS();

        $expected = new \stdClass();
        $expected->item = 1;
        $actual = $pis->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndAliq()
    {
        $aliq = new PIS\PISAliq();
        $aliq->setCST('01');
        $aliq->setVBC('100');
        $aliq->setPPIS('pPIS');
        $aliq->setVPIS('10');

        $pis = new PIS();
        $pis->setPISAliq($aliq);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $aliq->getCST();
        $expected->vBC = $aliq->getVBC();
        $expected->pPIS = $aliq->getPPIS();
        $expected->vPIS = $aliq->getVPIS();

        $actual = $pis->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndQtde()
    {
        $qtde = new PIS\PISQtde();
        $qtde->setCST('01');
        $qtde->setVPIS('10');
        $qtde->setQBCProd('qBCProd');
        $qtde->setVAliqProd('1');

        $pis = new PIS();
        $pis->setPISQtde($qtde);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $qtde->getCST();
        $expected->vPIS = $qtde->getVPIS();
        $expected->qBCProd = $qtde->getQBCProd();
        $expected->vAliqProd = $qtde->getVAliqProd();

        $actual = $pis->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndNT()
    {
        $nt = new PIS\PISNT();
        $nt->setCST('01');

        $pis = new PIS();
        $pis->setPISNT($nt);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $nt->getCST();

        $actual = $pis->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithExtrasAndOutr()
    {
        $outr = new PIS\PISOutr();
        $outr->setCST('01');
        $outr->setVBC('100');
        $outr->setPPIS('pPIS');
        $outr->setVPIS('10');
        $outr->setQBCProd('qBCProd');
        $outr->setVAliqProd('1');

        $pis = new PIS();
        $pis->setPISOutr($outr);

        $expected = new \stdClass();
        $expected->item = 1;
        $expected->CST = $outr->getCST();
        $expected->vBC = $outr->getVBC();
        $expected->pPIS = $outr->getPPIS();
        $expected->vPIS = $outr->getVPIS();
        $expected->qBCProd = $outr->getQBCProd();
        $expected->vAliqProd = $outr->getVAliqProd();

        $actual = $pis->toNFeTagWithExtras(['item' => 1]);

        $this->assertEquals($expected, $actual);
    }

}
