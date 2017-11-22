<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing Total
 */
class Total extends BaseGallywixDataTransfer
{

    /**
     * Totais referentes ao ICMS
     *
     * @property Total\ICMSTot
     * $ICMSTot
     */
    protected $ICMSTot = null;

    /**
     * Totais referentes ao ISSQN
     *
     * @property Total\ISSQNtot
     * $ISSQNtot
     */
    protected $ISSQNtot = null;

    /**
     * Retenção de Tributos Federais
     *
     * @property Total\RetTrib
     * $retTrib
     */
    protected $retTrib = null;

    /**
     * Gets as ICMSTot
     *
     * Totais referentes ao ICMS
     *
     * @return Total\ICMSTot
     */
    public function getICMSTot()
    {
        return $this->ICMSTot;
    }

    /**
     * Sets a new ICMSTot
     *
     * Totais referentes ao ICMS
     *
     * @param Total\ICMSTot $ICMSTot
     * @return self
     */
    public function setICMSTot(Total\ICMSTot $ICMSTot)
    {
        $this->ICMSTot = $ICMSTot;
        return $this;
    }

    /**
     * Gets as ISSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @return Total\ISSQNtot
     */
    public function getISSQNtot()
    {
        return $this->ISSQNtot;
    }

    /**
     * Sets a new ISSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @param Total\ISSQNtot $ISSQNtot
     * @return self
     */
    public function setISSQNtot(Total\ISSQNtot $ISSQNtot)
    {
        $this->ISSQNtot = $ISSQNtot;
        return $this;
    }

    /**
     * Gets as retTrib
     *
     * Retenção de Tributos Federais
     *
     * @return Total\RetTrib
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
     * @param Total\RetTrib $retTrib
     * @return self
     */
    public function setRetTrib(Total\RetTrib $retTrib)
    {
        $this->retTrib = $retTrib;
        return $this;
    }


}

