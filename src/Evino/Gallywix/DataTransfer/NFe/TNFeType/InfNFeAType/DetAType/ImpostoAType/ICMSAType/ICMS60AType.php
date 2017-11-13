<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType;

/**
 * Class representing ICMS60AType
 */
class ICMS60AType
{

    /**
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
     *
     * @property string $orig
     */
    private $orig = null;

    /**
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @property string $cST
     */
    private $cST = null;

    /**
     * Valor da BC do ICMS ST retido anteriormente
     *
     * @property string $vBCSTRet
     */
    private $vBCSTRet = null;

    /**
     * Aliquota suportada pelo consumidor final.
     *
     * @property string $pST
     */
    private $pST = null;

    /**
     * Valor do ICMS ST retido anteriormente
     *
     * @property string $vICMSSTRet
     */
    private $vICMSSTRet = null;

    /**
     * Valor da Base de cálculo do FCP retido anteriormente por ST.
     *
     * @property string $vBCFCPSTRet
     */
    private $vBCFCPSTRet = null;

    /**
     * Percentual de FCP retido anteriormente por substituição tributária.
     *
     * @property string $pFCPSTRet
     */
    private $pFCPSTRet = null;

    /**
     * Valor do FCP retido por substituição tributária.
     *
     * @property string $vFCPSTRet
     */
    private $vFCPSTRet = null;

    /**
     * Gets as orig
     *
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
     *
     * @return string
     */
    public function getOrig()
    {
        return $this->orig;
    }

    /**
     * Sets a new orig
     *
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
     *
     * @param string $orig
     * @return self
     */
    public function setOrig($orig)
    {
        $this->orig = $orig;
        return $this;
    }

    /**
     * Gets as cST
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @return string
     */
    public function getCST()
    {
        return $this->cST;
    }

    /**
     * Sets a new cST
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @param string $cST
     * @return self
     */
    public function setCST($cST)
    {
        $this->cST = $cST;
        return $this;
    }

    /**
     * Gets as vBCSTRet
     *
     * Valor da BC do ICMS ST retido anteriormente
     *
     * @return string
     */
    public function getVBCSTRet()
    {
        return $this->vBCSTRet;
    }

    /**
     * Sets a new vBCSTRet
     *
     * Valor da BC do ICMS ST retido anteriormente
     *
     * @param string $vBCSTRet
     * @return self
     */
    public function setVBCSTRet($vBCSTRet)
    {
        $this->vBCSTRet = $vBCSTRet;
        return $this;
    }

    /**
     * Gets as pST
     *
     * Aliquota suportada pelo consumidor final.
     *
     * @return string
     */
    public function getPST()
    {
        return $this->pST;
    }

    /**
     * Sets a new pST
     *
     * Aliquota suportada pelo consumidor final.
     *
     * @param string $pST
     * @return self
     */
    public function setPST($pST)
    {
        $this->pST = $pST;
        return $this;
    }

    /**
     * Gets as vICMSSTRet
     *
     * Valor do ICMS ST retido anteriormente
     *
     * @return string
     */
    public function getVICMSSTRet()
    {
        return $this->vICMSSTRet;
    }

    /**
     * Sets a new vICMSSTRet
     *
     * Valor do ICMS ST retido anteriormente
     *
     * @param string $vICMSSTRet
     * @return self
     */
    public function setVICMSSTRet($vICMSSTRet)
    {
        $this->vICMSSTRet = $vICMSSTRet;
        return $this;
    }

    /**
     * Gets as vBCFCPSTRet
     *
     * Valor da Base de cálculo do FCP retido anteriormente por ST.
     *
     * @return string
     */
    public function getVBCFCPSTRet()
    {
        return $this->vBCFCPSTRet;
    }

    /**
     * Sets a new vBCFCPSTRet
     *
     * Valor da Base de cálculo do FCP retido anteriormente por ST.
     *
     * @param string $vBCFCPSTRet
     * @return self
     */
    public function setVBCFCPSTRet($vBCFCPSTRet)
    {
        $this->vBCFCPSTRet = $vBCFCPSTRet;
        return $this;
    }

    /**
     * Gets as pFCPSTRet
     *
     * Percentual de FCP retido anteriormente por substituição tributária.
     *
     * @return string
     */
    public function getPFCPSTRet()
    {
        return $this->pFCPSTRet;
    }

    /**
     * Sets a new pFCPSTRet
     *
     * Percentual de FCP retido anteriormente por substituição tributária.
     *
     * @param string $pFCPSTRet
     * @return self
     */
    public function setPFCPSTRet($pFCPSTRet)
    {
        $this->pFCPSTRet = $pFCPSTRet;
        return $this;
    }

    /**
     * Gets as vFCPSTRet
     *
     * Valor do FCP retido por substituição tributária.
     *
     * @return string
     */
    public function getVFCPSTRet()
    {
        return $this->vFCPSTRet;
    }

    /**
     * Sets a new vFCPSTRet
     *
     * Valor do FCP retido por substituição tributária.
     *
     * @param string $vFCPSTRet
     * @return self
     */
    public function setVFCPSTRet($vFCPSTRet)
    {
        $this->vFCPSTRet = $vFCPSTRet;
        return $this;
    }


}

