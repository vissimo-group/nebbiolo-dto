<?php

namespace Evino\Gallywix\DataTransfer\Callback;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

class GallywixCallback extends BaseGallywixDataTransfer
{
    /** @var string */
    protected $nfeNumber;

    /** @var string */
    protected $orderReference;

    /** @var string */
    protected $nfeKey;

    /** @var string */
    protected $nfeXml;

    /** @var string */
    protected $sefazStatusCode;

    /** @var string */
    protected $sefazLastResponse;

    /** @var string */
    protected $gallywixStatusCode;

    /** @var string */
    protected $gallywixStatusDescription;

    /**
     * @return string
     */
    public function getNfeNumber()
    {
        return $this->nfeNumber;
    }

    /**
     * @param string $nfeNumber
     * @return GallywixCallback
     */
    public function setNfeNumber($nfeNumber)
    {
        $this->nfeNumber = $nfeNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return GallywixCallback
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getNfeKey()
    {
        return $this->nfeKey;
    }

    /**
     * @param string $nfeKey
     * @return GallywixCallback
     */
    public function setNfeKey($nfeKey)
    {
        $this->nfeKey = $nfeKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getNfeXml()
    {
        return $this->nfeXml;
    }

    /**
     * @param string $nfeXml
     * @return GallywixCallback
     */
    public function setNfeXml($nfeXml)
    {
        $this->nfeXml = $nfeXml;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazStatusCode()
    {
        return $this->sefazStatusCode;
    }

    /**
     * @param string $sefazStatusCode
     * @return GallywixCallback
     */
    public function setSefazStatusCode($sefazStatusCode)
    {
        $this->sefazStatusCode = $sefazStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazLastResponse()
    {
        return $this->sefazLastResponse;
    }

    /**
     * @param string $sefazLastResponse
     * @return GallywixCallback
     */
    public function setSefazLastResponse($sefazLastResponse)
    {
        $this->sefazLastResponse = $sefazLastResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getGallywixStatusCode()
    {
        return $this->gallywixStatusCode;
    }

    /**
     * @param string $gallywixStatusCode
     * @return GallywixCallback
     */
    public function setGallywixStatusCode($gallywixStatusCode)
    {
        $this->gallywixStatusCode = $gallywixStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGallywixStatusDescription()
    {
        return $this->gallywixStatusDescription;
    }

    /**
     * @param string $gallywixStatusDescription
     * @return GallywixCallback
     */
    public function setGallywixStatusDescription($gallywixStatusDescription)
    {
        $this->gallywixStatusDescription = $gallywixStatusDescription;
        return $this;
    }

}
