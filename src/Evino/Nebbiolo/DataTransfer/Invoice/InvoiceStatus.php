<?php

namespace Evino\Nebbiolo\DataTransfer\Invoice;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

class InvoiceStatus extends BaseDataTransfer
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
    protected $sefazStatusDescription;

    /** @var string */
    protected $sefazLastResponse;

    /** @var string */
    protected $nebbioloStatusCode;

    /** @var string */
    protected $nebbioloStatusDescription;

    /**
     * @return string
     */
    public function getNfeNumber()
    {
        return $this->nfeNumber;
    }

    /**
     * @param $nfeNumber
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
     */
    public function setSefazStatusDescription($sefazStatusDescription)
    {
        $this->sefazStatusDescription = $sefazStatusDescription;
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
     * @return static
     */
    public function setSefazLastResponse($sefazLastResponse)
    {
        $this->sefazLastResponse = $sefazLastResponse;
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
     * @return static
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
     * @return static
     */
    public function setNebbioloStatusDescription($nebbioloStatusDescription)
    {
        $this->nebbioloStatusDescription = $nebbioloStatusDescription;
        return $this;
    }

}
