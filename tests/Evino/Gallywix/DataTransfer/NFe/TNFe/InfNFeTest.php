<?php

namespace Evino\Tests\Gallywix\DataTransfer\NFe\TNFe;

use Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;
use PHPUnit\Framework\TestCase;

class InfNFeTest extends TestCase
{
    public function testGetTagautXMLNotAut(): void
    {
        $infNFe = new InfNFe();

        $expectedTag = null;
        $actualTag = $infNFe->getTagautXML();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetautXMLAutWithCPF(): void
    {
        $autXMLCPF = new InfNFe\AutXML();
        $autXMLCPF->setCPF('21603316353');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCPF));

        $expectedTag = new \stdClass();
        $expectedTag->CPF = '21603316353';
        $expectedTag->CNPJ = null;

        $actualTag = $infNFe->getTagautXML();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetautXMLAutWithCNPJ(): void
    {
        $autXMLCNPJ = new InfNFe\AutXML();
        $autXMLCNPJ->setCNPJ('12345678901234');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCNPJ));

        $expectedTag = new \stdClass();
        $expectedTag->CPF = null;
        $expectedTag->CNPJ = '12345678901234';

        $actualTag = $infNFe->getTagautXML();

        $this->assertEquals($expectedTag, $actualTag);
    }
}
