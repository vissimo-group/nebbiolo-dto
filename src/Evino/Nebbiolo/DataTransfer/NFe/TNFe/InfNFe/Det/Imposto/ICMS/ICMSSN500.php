<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMSSN500
 */
class ICMSSN500 extends BaseDataTransfer
{

    /**
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
     *
     * @property string $orig
     */
    protected $orig = null;

    /**
     * 500 – ICMS cobrado anterirmente por substituição tributária (substituído)
     * ou por antecipação
     * (v.2.0)
     *
     * @property string $cSOSN
     */
    protected $cSOSN = null;

    /**
     * Valor da BC do ICMS ST retido anteriormente (v2.0)
     *
     * @property string $vBCSTRet
     */
    protected $vBCSTRet = null;

    /**
     * Aliquota suportada pelo consumidor final.
     *
     * @property string $pST
     */
    protected $pST = null;

    /**
     * Valor do ICMS ST retido anteriormente (v2.0)
     *
     * @property string $vICMSSTRet
     */
    protected $vICMSSTRet = null;

    /**
     * Valor da Base de cálculo do FCP retido anteriormente.
     *
     * @property string $vBCFCPSTRet
     */
    protected $vBCFCPSTRet = null;

    /**
     * Percentual de FCP retido anteriormente por substituição tributária.
     *
     * @property string $pFCPSTRet
     */
    protected $pFCPSTRet = null;

    /**
     * Valor do FCP retido por substituição tributária.
     *
     * @property string $vFCPSTRet
     */
    protected $vFCPSTRet = null;

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
     * Gets as cSOSN
     *
     * 500 – ICMS cobrado anterirmente por substituição tributária (substituído)
     * ou por antecipação
     * (v.2.0)
     *
     * @return string
     */
    public function getCSOSN()
    {
        return $this->cSOSN;
    }

    /**
     * Sets a new cSOSN
     *
     * 500 – ICMS cobrado anterirmente por substituição tributária (substituído)
     * ou por antecipação
     * (v.2.0)
     *
     * @param string $cSOSN
     * @return self
     */
    public function setCSOSN($cSOSN)
    {
        $this->cSOSN = $cSOSN;
        return $this;
    }

    /**
     * Gets as vBCSTRet
     *
     * Valor da BC do ICMS ST retido anteriormente (v2.0)
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
     * Valor da BC do ICMS ST retido anteriormente (v2.0)
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
     * Valor do ICMS ST retido anteriormente (v2.0)
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
     * Valor do ICMS ST retido anteriormente (v2.0)
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
     * Valor da Base de cálculo do FCP retido anteriormente.
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
     * Valor da Base de cálculo do FCP retido anteriormente.
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

