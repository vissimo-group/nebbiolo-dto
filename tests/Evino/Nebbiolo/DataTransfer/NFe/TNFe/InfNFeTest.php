<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe;
use PHPUnit\Framework\TestCase;

class InfNFeTest extends TestCase
{
    public function testGetTagautXMLNotAut()
    {
        $infNFe = new InfNFe();

        $expectedTags = null;
        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals($expectedTags, $actualTags);
    }

    public function testGetautXMLAutWithCPF()
    {
        $autXMLCPF = new InfNFe\AutXML();
        $autXMLCPF->setCPF('21603316353');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCPF));

        $expectedTag = new \stdClass();
        $expectedTag->CPF = '21603316353';

        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals(array($expectedTag), $actualTags);
    }

    public function testGetautXMLAutWithCNPJ()
    {
        $autXMLCNPJ = new InfNFe\AutXML();
        $autXMLCNPJ->setCNPJ('12345678901234');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCNPJ));

        $expectedTag = new \stdClass();
        $expectedTag->CNPJ = '12345678901234';

        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals(array($expectedTag), $actualTags);
    }

    public function testGetautXMLAutWithBothCPFAndCNPJ()
    {
        $autXMLCPF = new InfNFe\AutXML();
        $autXMLCPF->setCPF('21603316353');

        $autXMLCNPJ = new InfNFe\AutXML();
        $autXMLCNPJ->setCNPJ('12345678901234');

        $infNFe = new InfNFe();
        $infNFe->setAutXML(array($autXMLCPF, $autXMLCNPJ));

        $tagCPF = new \stdClass();
        $tagCPF->CPF = $autXMLCPF->getCPF();

        $tagCNPJ = new \stdClass();
        $tagCNPJ->CNPJ = $autXMLCNPJ->getCNPJ();

        $expectedTags = array($tagCPF, $tagCNPJ);
        $actualTags = $infNFe->getTagautXML();

        $this->assertEquals($expectedTags, $actualTags);
    }
}
