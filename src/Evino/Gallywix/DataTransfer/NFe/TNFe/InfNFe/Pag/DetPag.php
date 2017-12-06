<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing DetPag
 */
class DetPag extends BaseGallywixDataTransfer
{

    /**
     * Forma de Pagamento:01-Dinheiro;02-Cheque;03-Cartão de Crédito;04-Cartão de
     * Débito;05-Crédito Loja;10-Vale Alimentação;11-Vale Refeição;12-Vale
     * Presente;13-Vale Combustível;14 - Duplicata Mercantil;15 - Boleto Bancario;90 -
     * Sem Pagamento;99 - Outros
     *
     * @property string $tPag
     */
    protected $tPag = null;

    /**
     * Valor do Pagamento. Esta tag poderá ser omitida quando a tag tPag=90 (Sem
     * Pagamento), caso contrário deverá ser preenchida.
     *
     * @property string $vPag
     */
    protected $vPag = null;

    /**
     * Grupo de Cartões
     *
     * @property DetPag\Card $card
     */
    protected $card = null;

    /**
     * @return \stdClass
     */
    public function toNFeTag()
    {
        $tag = parent::toNFeTag();

        $card = $this->getCard();
        if (!is_null($card)) {
            $tag->CNPJ = $card->getCNPJ();
            $tag->tBand = $card->getTBand();
            $tag->cAut = $card->getCAut();
            $tag->tpIntegra = $card->getTpIntegra();
        }

        return $tag;
    }

    /**
     * Gets as tPag
     *
     * Forma de Pagamento:01-Dinheiro;02-Cheque;03-Cartão de Crédito;04-Cartão de
     * Débito;05-Crédito Loja;10-Vale Alimentação;11-Vale Refeição;12-Vale
     * Presente;13-Vale Combustível;14 - Duplicata Mercantil;15 - Boleto Bancario;90 -
     * Sem Pagamento;99 - Outros
     *
     * @return string
     */
    public function getTPag()
    {
        return $this->tPag;
    }

    /**
     * Sets a new tPag
     *
     * Forma de Pagamento:01-Dinheiro;02-Cheque;03-Cartão de Crédito;04-Cartão de
     * Débito;05-Crédito Loja;10-Vale Alimentação;11-Vale Refeição;12-Vale
     * Presente;13-Vale Combustível;14 - Duplicata Mercantil;15 - Boleto Bancario;90 -
     * Sem Pagamento;99 - Outros
     *
     * @param string $tPag
     * @return self
     */
    public function setTPag($tPag)
    {
        $this->tPag = $tPag;
        return $this;
    }

    /**
     * Gets as vPag
     *
     * Valor do Pagamento. Esta tag poderá ser omitida quando a tag tPag=90 (Sem
     * Pagamento), caso contrário deverá ser preenchida.
     *
     * @return string
     */
    public function getVPag()
    {
        return $this->vPag;
    }

    /**
     * Sets a new vPag
     *
     * Valor do Pagamento. Esta tag poderá ser omitida quando a tag tPag=90 (Sem
     * Pagamento), caso contrário deverá ser preenchida.
     *
     * @param string $vPag
     * @return self
     */
    public function setVPag($vPag)
    {
        $this->vPag = $vPag;
        return $this;
    }

    /**
     * Gets as card
     *
     * Grupo de Cartões
     *
     * @return DetPag\Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Sets a new card
     *
     * Grupo de Cartões
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag\Card
     * $card
     * @return self
     */
    public function setCard(DetPag\Card $card)
    {
        $this->card = $card;
        return $this;
    }


}

