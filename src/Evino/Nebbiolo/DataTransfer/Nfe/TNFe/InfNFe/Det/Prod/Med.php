<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Med
 */
class Med extends BaseDataTransfer
{
    /**
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @property string $cProdANVISA
     */
    protected $cProdANVISA = null;

    /**
     * Preço Máximo ao Consumidor.
     *
     * @property string $vPMC
     */
    protected $vPMC = null;

    /**
     * Número do lote do medicamento
     *
     * @property string $nLote
     */
    protected $nLote = null;

    /**
     * Quantidade de produtos no lote
     *
     * @property string $qLote
     */
    protected $qLote = null;

    /**
     * Data de Fabricação do medicamento (AAAA-MM-DD)
     *
     * @property string $dFab
     */
    protected $dFab = null;

    /**
     * Data de validade do medicamento (AAAA-MM-DD)
     *
     * @property string $dVal
     */
    protected $dVal = null;

    /**
     * Gets as cProdANVISA
     *
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @return string
     */
    public function getCProdANVISA()
    {
        return $this->cProdANVISA;
    }

    /**
     * Sets a new cProdANVISA
     *
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @param string $cProdANVISA
     * @return self
     */
    public function setCProdANVISA($cProdANVISA)
    {
        $this->cProdANVISA = $cProdANVISA;
        return $this;
    }

    /**
     * Gets as vPMC
     *
     * Preço Máximo ao Consumidor.
     *
     * @return string
     */
    public function getVPMC()
    {
        return $this->vPMC;
    }

    /**
     * Sets a new vPMC
     *
     * Preço Máximo ao Consumidor.
     *
     * @param string $vPMC
     * @return self
     */
    public function setVPMC($vPMC)
    {
        $this->vPMC = $vPMC;
        return $this;
    }

    /**
     * Gets as nLote
     *
     * Número do lote do medicamento
     *
     * @return string $nLote
     */
    public function getNLote()
    {
        return $this->nLote;
    }

    /**
     * Sets a new nLote
     *
     * Número do lote do medicamento
     *
     * @param string $nLote
     * @return self
     */
    public function setNLote($nLote) {
        $this->nLote = $nLote;
        return $this;
    }

    /**
     * Gets as qLote
     *
     * Quantidade de produtos no lote
     *
     * @return string $qLote
     */
    public function getQLote()
    {
        return $this->qLote;
    }

    /**
     * Sets a new qLote
     *
     * Quantidade de produtos no lote
     *
     * @param string $qLote
     * @return self
     */
    public function setQLote($qLote) {
        $this->qLote = $qLote;
        return $this;
    }

    /**
     * Gets as dFab
     *
     * Data de Fabricação do medicamento (AAAA-MM-DD)
     *
     * @return string $dFab
     */
    public function getDFab()
    {
        return $this->dFab;
    }

    /**
     * Sets a new dFab
     *
     * Data de Fabricação do medicamento (AAAA-MM-DD)
     *
     * @param string $dFab
     * @return self
     */
    public function setDFab($dFab)
    {
        $this->dFab = $dFab;
        return $this;
    }

    /**
     * Gets as dVal
     *
     * Data de validade do medicamento (AAAA-MM-DD)
     *
     * @returns string $dVal
     */
    public function getDVal()
    {
        return $this->dVal;
    }

    /**
     * Sets a new dVal
     *
     * Data de validade do medicamento (AAAA-MM-DD)
     *
     * @param string $dVal
     * @return self
     */
    public function setDVal($dVal)
    {
        $this->dVal = $dVal;
        return $this;
    }
}
