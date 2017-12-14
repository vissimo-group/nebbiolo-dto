<?php

namespace Evino\Gallywix\DataTransfer\Request;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Nfe\NFe;

class CreateNFe extends BaseGallywixDataTransfer
{

    /**
     * @var string
     */
    protected $orderReference;

    /**
     * @var string
     */
    protected $callbackUrl;

    /**
     * @var NFe
     */
    protected $nfe;

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return CreateNFe
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     * @return CreateNFe
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @return NFe
     */
    public function getNfe()
    {
        return $this->nfe;
    }

    /**
     * @param NFe $nfe
     * @return CreateNFe
     */
    public function setNfe($nfe)
    {
        $this->nfe = $nfe;
        return $this;
    }
}
