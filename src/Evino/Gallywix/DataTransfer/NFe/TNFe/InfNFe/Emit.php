<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;
use Evino\Gallywix\DataTransfer\Nfe\TEnderEmi;

/**
 * Class representing Emit
 */
class Emit extends AbstractJsonSerializable
{

    /**
     * Número do CNPJ do emitente
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * Número do CPF do emitente
     *
     * @property string $CPF
     */
    protected $CPF = null;

    /**
     * Razão Social ou Nome do emitente
     *
     * @property string $xNome
     */
    protected $xNome = null;

    /**
     * Nome fantasia
     *
     * @property string $xFant
     */
    protected $xFant = null;

    /**
     * Endereço do emitente
     *
     * @property TEnderEmi $enderEmit
     */
    protected $enderEmit = null;

    /**
     * Inscrição Estadual do Emitente
     *
     * @property string $IE
     */
    protected $IE = null;

    /**
     * Inscricao Estadual do Substituto Tributário
     *
     * @property string $IEST
     */
    protected $IEST = null;

    /**
     * Inscrição Municipal
     *
     * @property string $IM
     */
    protected $IM = null;

    /**
     * CNAE Fiscal
     *
     * @property string $cNAE
     */
    protected $CNAE = null;

    /**
     * Código de Regime Tributário.
     * Este campo será obrigatoriamente preenchido com:
     * 1 – Simples Nacional;
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;
     * 3 – Regime Normal.
     *
     * @property string $cRT
     */
    protected $CRT = null;

    /**
     * Gets as CNPJ
     *
     * Número do CNPJ do emitente
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Sets a new CNPJ
     *
     * Número do CNPJ do emitente
     *
     * @param string $CNPJ
     * @return self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    /**
     * Gets as CPF
     *
     * Número do CPF do emitente
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Sets a new CPF
     *
     * Número do CPF do emitente
     *
     * @param string $CPF
     * @return self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
        return $this;
    }

    /**
     * Gets as xNome
     *
     * Razão Social ou Nome do emitente
     *
     * @return string
     */
    public function getXNome()
    {
        return $this->xNome;
    }

    /**
     * Sets a new xNome
     *
     * Razão Social ou Nome do emitente
     *
     * @param string $xNome
     * @return self
     */
    public function setXNome($xNome)
    {
        $this->xNome = $xNome;
        return $this;
    }

    /**
     * Gets as xFant
     *
     * Nome fantasia
     *
     * @return string
     */
    public function getXFant()
    {
        return $this->xFant;
    }

    /**
     * Sets a new xFant
     *
     * Nome fantasia
     *
     * @param string $xFant
     * @return self
     */
    public function setXFant($xFant)
    {
        $this->xFant = $xFant;
        return $this;
    }

    /**
     * Gets as enderEmit
     *
     * Endereço do emitente
     *
     * @return TEnderEmi
     */
    public function getEnderEmit()
    {
        return $this->enderEmit;
    }

    /**
     * Sets a new enderEmit
     *
     * Endereço do emitente
     *
     * @param TEnderEmi $enderEmit
     * @return self
     */
    public function setEnderEmit(TEnderEmi $enderEmit)
    {
        $this->enderEmit = $enderEmit;
        return $this;
    }

    /**
     * Gets as IE
     *
     * Inscrição Estadual do Emitente
     *
     * @return string
     */
    public function getIE()
    {
        return $this->IE;
    }

    /**
     * Sets a new IE
     *
     * Inscrição Estadual do Emitente
     *
     * @param string $IE
     * @return self
     */
    public function setIE($IE)
    {
        $this->IE = $IE;
        return $this;
    }

    /**
     * Gets as IEST
     *
     * Inscricao Estadual do Substituto Tributário
     *
     * @return string
     */
    public function getIEST()
    {
        return $this->IEST;
    }

    /**
     * Sets a new IEST
     *
     * Inscricao Estadual do Substituto Tributário
     *
     * @param string $IEST
     * @return self
     */
    public function setIEST($IEST)
    {
        $this->IEST = $IEST;
        return $this;
    }

    /**
     * Gets as IM
     *
     * Inscrição Municipal
     *
     * @return string
     */
    public function getIM()
    {
        return $this->IM;
    }

    /**
     * Sets a new IM
     *
     * Inscrição Municipal
     *
     * @param string $IM
     * @return self
     */
    public function setIM($IM)
    {
        $this->IM = $IM;
        return $this;
    }

    /**
     * Gets as CNAE
     *
     * CNAE Fiscal
     *
     * @return string
     */
    public function getCNAE()
    {
        return $this->CNAE;
    }

    /**
     * Sets a new CNAE
     *
     * CNAE Fiscal
     *
     * @param string $CNAE
     * @return self
     */
    public function setCNAE($CNAE)
    {
        $this->CNAE = $CNAE;
        return $this;
    }

    /**
     * Gets as CRT
     *
     * Código de Regime Tributário.
     * Este campo será obrigatoriamente preenchido com:
     * 1 – Simples Nacional;
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;
     * 3 – Regime Normal.
     *
     * @return string
     */
    public function getCRT()
    {
        return $this->CRT;
    }

    /**
     * Sets a new CRT
     *
     * Código de Regime Tributário.
     * Este campo será obrigatoriamente preenchido com:
     * 1 – Simples Nacional;
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;
     * 3 – Regime Normal.
     *
     * @param string $CRT
     * @return self
     */
    public function setCRT($CRT)
    {
        $this->CRT = $CRT;
        return $this;
    }

}

