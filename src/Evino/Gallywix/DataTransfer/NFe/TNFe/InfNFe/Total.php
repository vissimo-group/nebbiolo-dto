<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

/**
 * Class representing Total
 */
class Total
{

    /**
     * Totais referentes ao ICMS
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ICMSTot
     * $iCMSTot
     */
    private $iCMSTot = null;

    /**
     * Totais referentes ao ISSQN
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ISSQNtot
     * $iSSQNtot
     */
    private $iSSQNtot = null;

    /**
     * Retenção de Tributos Federais
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\RetTrib
     * $retTrib
     */
    private $retTrib = null;

    /**
     * Gets as iCMSTot
     *
     * Totais referentes ao ICMS
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ICMSTot
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ICMSTot $iCMSTot
     * @return self
     */
    public function setICMSTot(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ICMSTot $iCMSTot)
    {
        $this->iCMSTot = $iCMSTot;
        return $this;
    }

    /**
     * Gets as iSSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ISSQNtot
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ISSQNtot $iSSQNtot
     * @return self
     */
    public function setISSQNtot(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\ISSQNtot $iSSQNtot)
    {
        $this->iSSQNtot = $iSSQNtot;
        return $this;
    }

    /**
     * Gets as retTrib
     *
     * Retenção de Tributos Federais
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\RetTrib
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\RetTrib $retTrib
     * @return self
     */
    public function setRetTrib(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Total\RetTrib $retTrib)
    {
        $this->retTrib = $retTrib;
        return $this;
    }


}

