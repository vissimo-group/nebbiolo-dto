<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe\Det\Prod;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Comb;
use PHPUnit\Framework\TestCase;

final class CombTest extends TestCase
{

    public function testToNFeTagWithoutCIDE()
    {
        $comb = new Comb();
        $comb->setCODIF('CODIF');
        $comb->setCProdANP('cProdANP');
        $comb->setDescANP('DescANP');
        $comb->setPGLP('pGLP');
        $comb->setPGNi('pGNi');
        $comb->setPGNn('pGNn');
        $comb->setQTemp('qTemp');
        $comb->setUFCons('UFCons');
        $comb->setVPart('vPart');

        $expected = new \stdClass();
        $expected->CODIF = $comb->getCODIF();
        $expected->cProdANP = $comb->getCProdANP();
        $expected->descANP = $comb->getDescANP();
        $expected->pGLP = $comb->getPGLP();
        $expected->pGNi = $comb->getPGNi();
        $expected->pGNn = $comb->getPGNn();
        $expected->qTemp = $comb->getQTemp();
        $expected->UFCons = $comb->getUFCons();
        $expected->vPart = $comb->getVPart();

        $actual = $comb->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithCIDE()
    {
        $cide = new Comb\CIDE();
        $cide->setVAliqProd('100');
        $cide->setQBCProd('qBCProd');
        $cide->setVCIDE('10');

        $comb = new Comb();
        $comb->setCIDE($cide);
        $comb->setCODIF('CODIF');
        $comb->setCProdANP('cProdANP');
        $comb->setDescANP('DescANP');
        $comb->setPGLP('pGLP');
        $comb->setPGNi('pGNi');
        $comb->setPGNn('pGNn');
        $comb->setQTemp('qTemp');
        $comb->setUFCons('UFCons');
        $comb->setVPart('vPart');

        $expected = new \stdClass();
        $expected->CODIF = $comb->getCODIF();
        $expected->cProdANP = $comb->getCProdANP();
        $expected->descANP = $comb->getDescANP();
        $expected->pGLP = $comb->getPGLP();
        $expected->pGNi = $comb->getPGNi();
        $expected->pGNn = $comb->getPGNn();
        $expected->qTemp = $comb->getQTemp();
        $expected->UFCons = $comb->getUFCons();
        $expected->vPart = $comb->getVPart();
        $expected->vAliqProd = $cide->getVAliqProd();
        $expected->qBCProd = $cide->getQBCProd();
        $expected->vCIDE = $cide->getVCIDE();

        $actual = $comb->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

}
