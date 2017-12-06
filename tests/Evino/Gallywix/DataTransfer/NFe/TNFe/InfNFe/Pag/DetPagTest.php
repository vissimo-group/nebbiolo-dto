<?php

namespace Evino\Tests\Gallywix\DataTransfer\NFe\TNFe\InfNFe\Pag;

use Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag;
use PHPUnit\Framework\TestCase;

final class DetPagTest extends TestCase
{

    public function testToNFeTagWithoutCard()
    {
        $detPag = new DetPag();
        $detPag->setTPag('tPag');
        $detPag->setVPag('1000');

        $expected = new \stdClass();
        $expected->tPag = $detPag->getTPag();
        $expected->vPag = $detPag->getVPag();

        $actual = $detPag->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

    public function testToNFeTagWithCard()
    {
        $card = new DetPag\Card();
        $card->setCNPJ('CNPJ');
        $card->setCAut('18271233');
        $card->setTBand('tBand');
        $card->setTpIntegra('tpIntegra');

        $detPag = new DetPag();
        $detPag->setCard($card);
        $detPag->setTPag('tPag');
        $detPag->setVPag('1000');

        $expected = new \stdClass();
        $expected->tPag = $detPag->getTPag();
        $expected->vPag = $detPag->getVPag();
        $expected->CNPJ = $card->getCNPJ();
        $expected->cAut = $card->getCAut();
        $expected->tBand = $card->getTBand();
        $expected->tpIntegra = $card->getTpIntegra();

        $actual = $detPag->toNFeTag();

        $this->assertEquals($expected, $actual);
    }

}
