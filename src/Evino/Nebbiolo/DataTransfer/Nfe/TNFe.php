<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TNFe
 *
 * Tipo Nota Fiscal Eletrônica
 * XSD Type: TNFe
 */
class TNFe extends BaseDataTransfer
{

    /**
     * Informações da Nota Fiscal eletrônica
     *
     * @property TNFe\InfNFe $infNFe
     */
    protected $infNFe = null;

    /**
     * Informações suplementares Nota Fiscal
     *
     * @property TNFe\InfNFeSupl $infNFeSupl
     */
    protected $infNFeSupl = null;

    /**
     * @property xmldsig\Signature $signature
     */
    protected $signature = null;

    /**
     * Gets as infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @return TNFe\InfNFe
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
     * @param TNFe\InfNFe $infNFe
     * @return self
     */
    public function setInfNFe(TNFe\InfNFe $infNFe)
    {
        $this->infNFe = $infNFe;
        return $this;
    }

    /**
     * Gets as infNFeSupl
     *
     * Informações suplementares Nota Fiscal
     *
     * @return TNFe\InfNFeSupl
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
     * @param TNFe\InfNFeSupl $infNFeSupl
     * @return self
     */
    public function setInfNFeSupl(TNFe\InfNFeSupl $infNFeSupl)
    {
        $this->infNFeSupl = $infNFeSupl;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

}
