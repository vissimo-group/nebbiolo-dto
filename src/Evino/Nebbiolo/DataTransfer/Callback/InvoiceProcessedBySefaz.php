<?php

namespace Evino\Nebbiolo\DataTransfer\Callback;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

class InvoiceProcessedBySefaz extends BaseDataTransfer
{
    /** @var string */
    protected $callbackUrl;

    /** @var string */
    protected $orderReference;

    /** @var string */
    protected $series;

    /** @var string */
    protected $number;

    /** @var string */
    protected $nfeKey;

    /** @var string */
    protected $nfeXml;

    /** @var string */
    protected $sefazStatusCode;

    /** @var string */
    protected $sefazStatusDescription;

    /** @var string */
    protected $sefazResponse;

    /** @var string */
    protected $nebbioloStatusCode;

    /** @var string */
    protected $nebbioloStatusDescription;

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     * @return InvoiceProcessedBySefaz
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
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
     * @return InvoiceProcessedBySefaz
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     * @return InvoiceProcessedBySefaz
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return InvoiceProcessedBySefaz
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
     * @return InvoiceProcessedBySefaz
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
     * @return InvoiceProcessedBySefaz
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
     * @return InvoiceProcessedBySefaz
     */
    public function setSefazStatusCode($sefazStatusCode)
    {
        $this->sefazStatusCode = $sefazStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazStatusDescription()
    {
        return $this->sefazStatusDescription;
    }

    /**
     * @param string $sefazStatusDescription
     * @return InvoiceProcessedBySefaz
     */
    public function setSefazStatusDescription($sefazStatusDescription)
    {
        $this->sefazStatusDescription = $sefazStatusDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazResponse()
    {
        return $this->sefazResponse;
    }

    /**
     * @param string $sefazResponse
     * @return InvoiceProcessedBySefaz
     */
    public function setSefazResponse($sefazResponse)
    {
        $this->sefazResponse = $sefazResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getNebbioloStatusCode()
    {
        return $this->nebbioloStatusCode;
    }

    /**
     * @param string $nebbioloStatusCode
     * @return InvoiceProcessedBySefaz
     */
    public function setNebbioloStatusCode($nebbioloStatusCode)
    {
        $this->nebbioloStatusCode = $nebbioloStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNebbioloStatusDescription()
    {
        return $this->nebbioloStatusDescription;
    }

    /**
     * @param string $nebbioloStatusDescription
     * @return InvoiceProcessedBySefaz
     */
    public function setNebbioloStatusDescription($nebbioloStatusDescription)
    {
        $this->nebbioloStatusDescription = $nebbioloStatusDescription;
        return $this;
    }
}
