<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{

    /**
     * Totais referentes ao ICMS
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ICMSTotAType
     * $iCMSTot
     */
    private $iCMSTot = null;

    /**
     * Totais referentes ao ISSQN
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType
     * $iSSQNtot
     */
    private $iSSQNtot = null;

    /**
     * Retenção de Tributos Federais
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\RetTribAType
     * $retTrib
     */
    private $retTrib = null;

    /**
     * Gets as iCMSTot
     *
     * Totais referentes ao ICMS
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ICMSTotAType
     */
    public function getICMSTot()
    {
        return $this->iCMSTot;
    }

    /**
     * Sets a new iCMSTot
     *
     * Totais referentes ao ICMS
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ICMSTotAType $iCMSTot
     * @return self
     */
    public function setICMSTot(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ICMSTotAType $iCMSTot)
    {
        $this->iCMSTot = $iCMSTot;
        return $this;
    }

    /**
     * Gets as iSSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType
     */
    public function getISSQNtot()
    {
        return $this->iSSQNtot;
    }

    /**
     * Sets a new iSSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType $iSSQNtot
     * @return self
     */
    public function setISSQNtot(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType $iSSQNtot)
    {
        $this->iSSQNtot = $iSSQNtot;
        return $this;
    }

    /**
     * Gets as retTrib
     *
     * Retenção de Tributos Federais
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\RetTribAType
     */
    public function getRetTrib()
    {
        return $this->retTrib;
    }

    /**
     * Sets a new retTrib
     *
     * Retenção de Tributos Federais
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\RetTribAType $retTrib
     * @return self
     */
    public function setRetTrib(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType\RetTribAType $retTrib)
    {
        $this->retTrib = $retTrib;
        return $this;
    }


}

