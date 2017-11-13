<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TNFeType
 *
 * Tipo Nota Fiscal Eletrônica
 * XSD Type: TNFe
 */
class TNFeType
{

    /**
     * Informações da Nota Fiscal eletrônica
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType $infNFe
     */
    private $infNFe = null;

    /**
     * Informações suplementares Nota Fiscal
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeSuplAType $infNFeSupl
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
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType $infNFe
     * @return self
     */
    public function setInfNFe(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType $infNFe)
    {
        $this->infNFe = $infNFe;
        return $this;
    }

    /**
     * Gets as infNFeSupl
     *
     * Informações suplementares Nota Fiscal
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeSuplAType
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeSuplAType $infNFeSupl
     * @return self
     */
    public function setInfNFeSupl(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeSuplAType $infNFeSupl)
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

