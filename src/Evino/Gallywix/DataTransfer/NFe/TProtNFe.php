<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing TProtNFe
 *
 * Tipo Protocolo de status resultado do processamento da NF-e
 * XSD Type: TProtNFe
 */
class TProtNFe extends AbstractJsonSerializable
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * Dados do protocolo de status
     *
     * @property TProtNFe\InfProt $infProt
     */
    protected $infProt = null;

    /**
     * @property xmldsig\Signature $signature
     */
    protected $signature = null;

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as infProt
     *
     * Dados do protocolo de status
     *
     * @return TProtNFe\InfProt
     */
    public function getInfProt()
    {
        return $this->infProt;
    }

    /**
     * Sets a new infProt
     *
     * Dados do protocolo de status
     *
     * @param TProtNFe\InfProt $infProt
     * @return self
     */
    public function setInfProt(TProtNFe\InfProt $infProt)
    {
        $this->infProt = $infProt;
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

