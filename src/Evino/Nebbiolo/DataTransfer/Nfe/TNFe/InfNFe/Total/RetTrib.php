<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Total;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing RetTrib
 */
class RetTrib extends BaseDataTransfer
{
    /**
     * Valor Retido de PIS
     *
     * @property string $vRetPIS
     */
    protected $vRetPIS = null;

    /**
     * Valor Retido de COFINS
     *
     * @property string $vRetCOFINS
     */
    protected $vRetCOFINS = null;

    /**
     * Valor Retido de CSLL
     *
     * @property string $vRetCSLL
     */
    protected $vRetCSLL = null;

    /**
     * Base de Cálculo do IRRF
     *
     * @property string $vBCIRRF
     */
    protected $vBCIRRF = null;

    /**
     * Valor Retido de IRRF
     *
     * @property string $vIRRF
     */
    protected $vIRRF = null;

    /**
     * Base de Cálculo da Retenção da Previdêncica Social
     *
     * @property string $vBCRetPrev
     */
    protected $vBCRetPrev = null;

    /**
     * Valor da Retenção da Previdêncica Social
     *
     * @property string $vRetPrev
     */
    protected $vRetPrev = null;

    /**
     * Gets as vRetPIS
     *
     * Valor Retido de PIS
     *
     * @return string
     */
    public function getVRetPIS()
    {
        return $this->vRetPIS;
    }

    /**
     * Sets a new vRetPIS
     *
     * Valor Retido de PIS
     *
     * @param string $vRetPIS
     * @return self
     */
    public function setVRetPIS($vRetPIS)
    {
        $this->vRetPIS = $vRetPIS;
        return $this;
    }

    /**
     * Gets as vRetCOFINS
     *
     * Valor Retido de COFINS
     *
     * @return string
     */
    public function getVRetCOFINS()
    {
        return $this->vRetCOFINS;
    }

    /**
     * Sets a new vRetCOFINS
     *
     * Valor Retido de COFINS
     *
     * @param string $vRetCOFINS
     * @return self
     */
    public function setVRetCOFINS($vRetCOFINS)
    {
        $this->vRetCOFINS = $vRetCOFINS;
        return $this;
    }

    /**
     * Gets as vRetCSLL
     *
     * Valor Retido de CSLL
     *
     * @return string
     */
    public function getVRetCSLL()
    {
        return $this->vRetCSLL;
    }

    /**
     * Sets a new vRetCSLL
     *
     * Valor Retido de CSLL
     *
     * @param string $vRetCSLL
     * @return self
     */
    public function setVRetCSLL($vRetCSLL)
    {
        $this->vRetCSLL = $vRetCSLL;
        return $this;
    }

    /**
     * Gets as vBCIRRF
     *
     * Base de Cálculo do IRRF
     *
     * @return string
     */
    public function getVBCIRRF()
    {
        return $this->vBCIRRF;
    }

    /**
     * Sets a new vBCIRRF
     *
     * Base de Cálculo do IRRF
     *
     * @param string $vBCIRRF
     * @return self
     */
    public function setVBCIRRF($vBCIRRF)
    {
        $this->vBCIRRF = $vBCIRRF;
        return $this;
    }

    /**
     * Gets as vIRRF
     *
     * Valor Retido de IRRF
     *
     * @return string
     */
    public function getVIRRF()
    {
        return $this->vIRRF;
    }

    /**
     * Sets a new vIRRF
     *
     * Valor Retido de IRRF
     *
     * @param string $vIRRF
     * @return self
     */
    public function setVIRRF($vIRRF)
    {
        $this->vIRRF = $vIRRF;
        return $this;
    }

    /**
     * Gets as vBCRetPrev
     *
     * Base de Cálculo da Retenção da Previdêncica Social
     *
     * @return string
     */
    public function getVBCRetPrev()
    {
        return $this->vBCRetPrev;
    }

    /**
     * Sets a new vBCRetPrev
     *
     * Base de Cálculo da Retenção da Previdêncica Social
     *
     * @param string $vBCRetPrev
     * @return self
     */
    public function setVBCRetPrev($vBCRetPrev)
    {
        $this->vBCRetPrev = $vBCRetPrev;
        return $this;
    }

    /**
     * Gets as vRetPrev
     *
     * Valor da Retenção da Previdêncica Social
     *
     * @return string
     */
    public function getVRetPrev()
    {
        return $this->vRetPrev;
    }

    /**
     * Sets a new vRetPrev
     *
     * Valor da Retenção da Previdêncica Social
     *
     * @param string $vRetPrev
     * @return self
     */
    public function setVRetPrev($vRetPrev)
    {
        $this->vRetPrev = $vRetPrev;
        return $this;
    }
}
