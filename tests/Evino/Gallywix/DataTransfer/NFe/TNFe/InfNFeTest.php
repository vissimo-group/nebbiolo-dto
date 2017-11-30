<?php

namespace Evino\Tests\Gallywix\DataTransfer\NFe\TNFe;

use Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;
use PHPUnit\Framework\TestCase;

class InfNFeTest extends TestCase
{
    public function testGetTagautXMLNotAut(): void
    {
        $infNFe = new InfNFe();

        $expectedTags = null;
        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals($expectedTags, $actualTags);
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

        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals(array($expectedTag), $actualTags);
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

        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals(array($expectedTag), $actualTags);
    }

    public function testGetautXMLAutWithBothCPFAndCNPJ(): void
    {
        $autXMLCPF = new InfNFe\AutXML();
        $autXMLCPF->setCPF('21603316353');

        $autXMLCNPJ = new InfNFe\AutXML();
        $autXMLCNPJ->setCNPJ('12345678901234');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCPF, $autXMLCNPJ));

        $tagCPF = new \stdClass();
        $tagCPF->CPF = $autXMLCPF->getCPF();
        $tagCPF->CNPJ = null;

        $tagCNPJ = new \stdClass();
        $tagCNPJ->CPF = null;
        $tagCNPJ->CNPJ = $autXMLCNPJ->getCNPJ();

        $expectedTags = array($tagCPF, $tagCNPJ);
        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals($expectedTags, $actualTags);
    }
}
