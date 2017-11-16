<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing DetExport
 */
class DetExport extends AbstractJsonSerializable
{

    /**
     * Número do ato concessório de Drawback
     *
     * @property string $nDraw
     */
    protected $nDraw = null;

    /**
     * Exportação indireta
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport\ExportInd
     * $exportInd
     */
    protected $exportInd = null;

    /**
     * Gets as nDraw
     *
     * Número do ato concessório de Drawback
     *
     * @return string
     */
    public function getNDraw()
    {
        return $this->nDraw;
    }

    /**
     * Sets a new nDraw
     *
     * Número do ato concessório de Drawback
     *
     * @param string $nDraw
     * @return self
     */
    public function setNDraw($nDraw)
    {
        $this->nDraw = $nDraw;
        return $this;
    }

    /**
     * Gets as exportInd
     *
     * Exportação indireta
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport\ExportInd
     */
    public function getExportInd()
    {
        return $this->exportInd;
    }

	/**
	 * Sets a new exportInd
	 *
	 * Exportação indireta
	 *
	 * @param DetExport\ExportInd $exportInd
	 * @return DetExport
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport\ExportInd* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport\ExportInd
	 * $exportInd
	 */
    public function setExportInd(DetExport\ExportInd $exportInd)
    {
        $this->exportInd = $exportInd;
        return $this;
    }


}

