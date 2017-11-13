<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TNFe
 *
 * Tipo Nota Fiscal Eletrônica
 * XSD Type: TNFe
 */
class TNFe
{

    /**
     * Informações da Nota Fiscal eletrônica
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe $infNFe
     */
    private $infNFe = null;

    /**
     * Informações suplementares Nota Fiscal
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFeSupl $infNFeSupl
     */
    private $infNFeSupl = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe
     */
    public function getInfNFe()
    {
        return $this->infNFe;
    }

    /**
     * Sets a new infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe $infNFe
     * @return self
     */
    public function setInfNFe(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe $infNFe)
    {
        $this->infNFe = $infNFe;
        return $this;
    }

    /**
     * Gets as infNFeSupl
     *
     * Informações suplementares Nota Fiscal
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFeSupl
     */
    public function getInfNFeSupl()
    {
        return $this->infNFeSupl;
    }

    /**
     * Sets a new infNFeSupl
     *
     * Informações suplementares Nota Fiscal
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFeSupl $infNFeSupl
     * @return self
     */
    public function setInfNFeSupl(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFeSupl $infNFeSupl)
    {
        $this->infNFeSupl = $infNFeSupl;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

