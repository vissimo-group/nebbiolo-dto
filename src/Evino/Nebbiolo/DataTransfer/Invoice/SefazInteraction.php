<?php

namespace Evino\Nebbiolo\DataTransfer\Invoice;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Data transfer used to represent an interaction with SEFAZ
 * @package Evino\Nebbiolo\DataTransfer\Invoice
 */
class SefazInteraction extends BaseDataTransfer
{
    /** @var string */
    protected $statusCode;

    /** @var string */
    protected $statusDescription;

    /** @var string */
    protected $response;

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return SefazInteraction
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @param string $statusDescription
     * @return SefazInteraction
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return SefazInteraction
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
