<?php

namespace Evino\Nebbiolo\DataTransfer\Invoice;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Data transfer used to represent an invoice status
 * @package Evino\Nebbiolo\DataTransfer\Invoice
 */
class InvoiceStatus extends BaseDataTransfer
{
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

    /** @var SefazInteraction[] */
    protected $sefazInteractions;

    /** @var string */
    protected $nebbioloStatusCode;

    /** @var string */
    protected $nebbioloStatusDescription;

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return InvoiceStatus
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
     * @return InvoiceStatus
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
     * @return InvoiceStatus
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
     * @return InvoiceStatus
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
     * @return InvoiceStatus
     */
    public function setNfeXml($nfeXml)
    {
        $this->nfeXml = $nfeXml;
        return $this;
    }

    /**
     * @return SefazInteraction[]
     */
    public function getSefazInteractions()
    {
        return $this->sefazInteractions;
    }

    /**
     * @param array $sefazInteractions
     * @return $this
     */
    public function setSefazInteractions(array $sefazInteractions)
    {
        $this->sefazInteractions = $sefazInteractions;
        return $this;
    }

    /**
     * @param SefazInteraction $sefazInteraction
     */
    public function appendSefazInteraction($sefazInteraction)
    {
        $this->sefazInteractions[] = $sefazInteraction;
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
     * @return InvoiceStatus
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
     * @return InvoiceStatus
     */
    public function setNebbioloStatusDescription($nebbioloStatusDescription)
    {
        $this->nebbioloStatusDescription = $nebbioloStatusDescription;
        return $this;
    }
}
