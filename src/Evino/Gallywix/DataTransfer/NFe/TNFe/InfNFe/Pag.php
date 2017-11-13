<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

/**
 * Class representing Pag
 */
class Pag
{

    /**
     * Grupo de detalhamento da forma de pagamento.
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag[] $detPag
     */
    private $detPag = array(

    );

    /**
     * Valor do Troco.
     *
     * @property string $vTroco
     */
    private $vTroco = null;

    /**
     * Adds as detPag
     *
     * Grupo de detalhamento da forma de pagamento.
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag $detPag
     */
    public function addToDetPag(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag $detPag)
    {
        $this->detPag[] = $detPag;
        return $this;
    }

    /**
     * isset detPag
     *
     * Grupo de detalhamento da forma de pagamento.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetPag($index)
    {
        return isset($this->detPag[$index]);
    }

    /**
     * unset detPag
     *
     * Grupo de detalhamento da forma de pagamento.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetPag($index)
    {
        unset($this->detPag[$index]);
    }

    /**
     * Gets as detPag
     *
     * Grupo de detalhamento da forma de pagamento.
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag[]
     */
    public function getDetPag()
    {
        return $this->detPag;
    }

    /**
     * Sets a new detPag
     *
     * Grupo de detalhamento da forma de pagamento.
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Pag\DetPag[] $detPag
     * @return self
     */
    public function setDetPag(array $detPag)
    {
        $this->detPag = $detPag;
        return $this;
    }

    /**
     * Gets as vTroco
     *
     * Valor do Troco.
     *
     * @return string
     */
    public function getVTroco()
    {
        return $this->vTroco;
    }

    /**
     * Sets a new vTroco
     *
     * Valor do Troco.
     *
     * @param string $vTroco
     * @return self
     */
    public function setVTroco($vTroco)
    {
        $this->vTroco = $vTroco;
        return $this;
    }


}

