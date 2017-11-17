<?php

namespace Evino\Gallywix\DataTransfer\Request;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;
use Evino\Gallywix\DataTransfer\Nfe\NFe;

class CreateNFe extends AbstractJsonSerializable
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
    public function getOrderReference(): string
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return CreateNFe
     */
    public function setOrderReference(string $orderReference): CreateNFe
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     * @return CreateNFe
     */
    public function setCallbackUrl(string $callbackUrl): CreateNFe
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @return NFe
     */
    public function getNfe(): NFe
    {
        return $this->nfe;
    }

    /**
     * @param NFe $nfe
     * @return CreateNFe
     */
    public function setNfe(NFe $nfe): CreateNFe
    {
        $this->nfe = $nfe;
        return $this;
    }
}
