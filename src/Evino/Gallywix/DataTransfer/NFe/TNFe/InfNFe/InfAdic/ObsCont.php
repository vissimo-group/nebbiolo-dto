<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing ObsCont
 */
class ObsCont extends BaseGallywixDataTransfer
{

    /**
     * @property string $xCampo
     */
    protected $xCampo = null;

    /**
     * @property string $xTexto
     */
    protected $xTexto = null;

    /**
     * Gets as xCampo
     *
     * @return string
     */
    public function getXCampo()
    {
        return $this->xCampo;
    }

    /**
     * Sets a new xCampo
     *
     * @param string $xCampo
     * @return self
     */
    public function setXCampo($xCampo)
    {
        $this->xCampo = $xCampo;
        return $this;
    }

    /**
     * Gets as xTexto
     *
     * @return string
     */
    public function getXTexto()
    {
        return $this->xTexto;
    }

    /**
     * Sets a new xTexto
     *
     * @param string $xTexto
     * @return self
     */
    public function setXTexto($xTexto)
    {
        $this->xTexto = $xTexto;
        return $this;
    }


}

