<?php

namespace Evino\Tests\Nebbiolo\DataTransfer\NFe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Ide;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefECF;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefNF;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefNFP;
use Evino\Tests\Nebbiolo\DataTransfer\Base\BaseDataTransferTestClass;
use Evino\Tests\Nebbiolo\Helpers\ObjectHelper;
use PHPUnit\Framework\TestCase;

final class IdeTest extends TestCase
{
    public function testGetTagrefNFe()
    {
        $expectedTag = new \stdClass();
        $expectedTag->refNFe = $this->sampleRefNFe()->getRefNFe();

        $actualTag = $this->sampleIde()->getTagrefNFe();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetTagrefNF()
    {
        $refNF = $this->sampleRefNF()->getRefNF();

        $expectedTag = new \stdClass();
        $expectedTag->cUF = $refNF->getCUF();
        $expectedTag->AAMM = $refNF->getAAMM();
        $expectedTag->CNPJ = $refNF->getCNPJ();
        $expectedTag->mod = $refNF->getMod();
        $expectedTag->serie = $refNF->getSerie();
        $expectedTag->nNF = $refNF->getNNF();

        $actualTag = $this->sampleIde()->getTagrefNF();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetTagrefNFP()
    {
        $refNFP = $this->sampleRefNFP()->getRefNFP();

        $expectedTag = new \stdClass();
        $expectedTag->cUF = $refNFP->getCUF();
        $expectedTag->AAMM = $refNFP->getAAMM();
        $expectedTag->CNPJ = $refNFP->getCNPJ();
        $expectedTag->CPF = $refNFP->getCPF();
        $expectedTag->IE = $refNFP->getIE();
        $expectedTag->mod = $refNFP->getMod();
        $expectedTag->serie = $refNFP->getSerie();
        $expectedTag->nNF = $refNFP->getNNF();

        $expectedTag = ObjectHelper::stripNullValuesFromStdClass($expectedTag);

        $actualTag = $this->sampleIde()->getTagrefNFP();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetTagrefCTe()
    {
        $expectedTag = new \stdClass();
        $expectedTag->refCTe = $this->sampleRefCTe()->getRefCTe();

        $actualTag = $this->sampleIde()->getTagrefCTe();

        $this->assertEquals($expectedTag, $actualTag);
    }

    public function testGetTagrefECF()
    {
        $refECF = $this->sampleRefECF()->getRefECF();

        $expectedTag = new \stdClass();
        $expectedTag->mod = $refECF->getMod();
        $expectedTag->nECF = $refECF->getNECF();
        $expectedTag->nCOO = $refECF->getNCOO();

        $actualTag = $this->sampleIde()->getTagrefECF();

        $this->assertEquals($expectedTag, $actualTag);
    }

    /*** AUX ATTRIBUTES AND METHODS ARE LOCATED BELOW ***/

    /**
     * @return Ide\NFref
     */
    private function sampleRefNFe()
    {
        $nfRef = new Ide\NFref();
        $nfRef->setRefNFe('35150271780456000160550010000253101000253101');
        return $nfRef;
    }

    /**
     * @return Ide\NFref
     */
    private function sampleRefCTe()
    {
        $nfRef = new Ide\NFref();
        $nfRef->setRefCTe('35150268252816000146570010000016161002008472');
        return $nfRef;
    }

    /**
     * @return Ide\NFref
     */
    private function sampleRefNF()
    {
        $nfRef = new Ide\NFref();
        $refNF = new RefNF();

        $refNF->setCUF(35);
        $refNF->setAAMM(1412);
        $refNF->setCNPJ('52297850000105');
        $refNF->setMod('01');
        $refNF->setSerie(3);
        $refNF->setNNF(587878);

        $nfRef->setRefNF($refNF);
        return $nfRef;
    }

    /**
     * @return Ide\NFref
     */
    private function sampleRefNFP()
    {
        $nfRef = new Ide\NFref();
        $refNFP = new RefNFP();

        $refNFP->setCUF(35);
        $refNFP->setAAMM(1502);
        $refNFP->setIE('ISENTO');
        $refNFP->setMod('01');
        $refNFP->setSerie(0);
        $refNFP->setNNF(5578);

        $nfRef->setRefNFP($refNFP);
        return $nfRef;
    }

    /**
     * @return Ide\NFref
     */
    private function sampleRefECF()
    {
        $nfRef = new Ide\NFref();
        $refECF = new RefECF();

        $refECF->setMod('2C');
        $refECF->setNECF(788);
        $refECF->setNCOO(114);

        $nfRef->setRefECF($refECF);
        return $nfRef;
    }

    /**
     * @param array $nfRef
     * @return Ide
     */
    private function buildIdWithNFref($nfRef)
    {
        $ide = new Ide();

        $ide->setNFref($nfRef);

        return $ide;
    }

    /**
     * @return Ide
     */
    private function sampleIde()
    {
        return $this->buildIdWithNFref(array($this->sampleRefCTe(), $this->sampleRefECF(), $this->sampleRefNF(),
            $this->sampleRefNFe(), $this->sampleRefNFP()));
    }
}
