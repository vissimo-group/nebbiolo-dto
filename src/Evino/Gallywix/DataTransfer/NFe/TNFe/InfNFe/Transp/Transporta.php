<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Transp;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing Transporta
 */
class Transporta extends AbstractJsonSerializable
{

    /**
     * CNPJ do transportador
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * CPF do transportador
     *
     * @property string $CPF
     */
    protected $CPF = null;

    /**
     * Razão Social ou nome do transportador
     *
     * @property string $xNome
     */
    protected $xNome = null;

    /**
     * Inscrição Estadual (v2.0)
     *
     * @property string $IE
     */
    protected $IE = null;

    /**
     * Endereço completo
     *
     * @property string $xEnder
     */
    protected $xEnder = null;

    /**
     * Nome do munícipio
     *
     * @property string $xMun
     */
    protected $xMun = null;

    /**
     * Sigla da UF
     *
     * @property string $UF
     */
    protected $UF = null;

    /**
     * Gets as CNPJ
     *
     * CNPJ do transportador
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
     * CNPJ do transportador
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
     * CPF do transportador
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
     * CPF do transportador
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
     * Razão Social ou nome do transportador
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
     * Razão Social ou nome do transportador
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
     * Gets as IE
     *
     * Inscrição Estadual (v2.0)
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
     * Inscrição Estadual (v2.0)
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
     * Gets as xEnder
     *
     * Endereço completo
     *
     * @return string
     */
    public function getXEnder()
    {
        return $this->xEnder;
    }

    /**
     * Sets a new xEnder
     *
     * Endereço completo
     *
     * @param string $xEnder
     * @return self
     */
    public function setXEnder($xEnder)
    {
        $this->xEnder = $xEnder;
        return $this;
    }

    /**
     * Gets as xMun
     *
     * Nome do munícipio
     *
     * @return string
     */
    public function getXMun()
    {
        return $this->xMun;
    }

    /**
     * Sets a new xMun
     *
     * Nome do munícipio
     *
     * @param string $xMun
     * @return self
     */
    public function setXMun($xMun)
    {
        $this->xMun = $xMun;
        return $this;
    }

    /**
     * Gets as UF
     *
     * Sigla da UF
     *
     * @return string
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Sets a new UF
     *
     * Sigla da UF
     *
     * @param string $UF
     * @return self
     */
    public function setUF($UF)
    {
        $this->UF = $UF;
        return $this;
    }


}

