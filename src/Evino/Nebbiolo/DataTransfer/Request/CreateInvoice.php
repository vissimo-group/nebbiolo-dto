<?php

namespace Evino\Nebbiolo\DataTransfer\Request;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;
use Evino\Nebbiolo\DataTransfer\Nfe\NFe;

class CreateInvoice extends BaseDataTransfer
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
     * @return CreateInvoice
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
     * @return CreateInvoice
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
     * @return CreateInvoice
     */
    public function setNfe(NFe $nfe)
    {
        $this->nfe = $nfe;
        return $this;
    }

}
