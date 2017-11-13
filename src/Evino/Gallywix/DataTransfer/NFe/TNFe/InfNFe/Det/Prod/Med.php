<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

/**
 * Class representing Med
 */
class Med
{

    /**
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @property string $cProdANVISA
     */
    private $cProdANVISA = null;

    /**
     * Preço Máximo ao Consumidor.
     *
     * @property string $vPMC
     */
    private $vPMC = null;

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


}

