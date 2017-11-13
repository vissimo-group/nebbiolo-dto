<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TProtNFe
 *
 * Tipo Protocolo de status resultado do processamento da NF-e
 * XSD Type: TProtNFe
 */
class TProtNFe
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do protocolo de status
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TProtNFe\InfProt $infProt
     */
    private $infProt = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\Signature $signature
     */
    private $signature = null;

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
     * @return \Evino\Gallywix\DataTransfer\Nfe\TProtNFe\InfProt
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TProtNFe\InfProt $infProt
     * @return self
     */
    public function setInfProt(\Evino\Gallywix\DataTransfer\Nfe\TProtNFe\InfProt $infProt)
    {
        $this->infProt = $infProt;
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

