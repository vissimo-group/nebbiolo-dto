<?php

namespace Evino\Gallywix\DataTransfer\Sefaz;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Sefaz\RetConsReciNFe\Attributes;
use Evino\Gallywix\DataTransfer\Sefaz\RetConsReciNFe\ProtNFe;

/**
 * Class RetConsReciNFe
 * @package Evino\Gallywix\DataTransfer\Sefaz
 */
class RetConsReciNFe extends BaseGallywixDataTransfer
{
    /** @var Attributes */
    protected $attributes;

    /** @var int */
    protected $tpAmb;

    /** @var string */
    protected $verAplic;

    /** @var string */
    protected $nRec;

    /** @var int */
    protected $cStat;

    /** @var string */
    protected $xMotivo;

    /** @var string */
    protected $cUF;

    /** @var string */
    protected $dhRecbto;

    /** @var ProtNFe */
    protected $protNFe;

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attributes $attributes
     * @return RetConsReciNFe
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return int
     */
    public function getTpAmb()
    {
        return $this->tpAmb;
    }

    /**
     * @param int $tpAmb
     * @return RetConsReciNFe
     */
    public function setTpAmb($tpAmb)
    {
        $this->tpAmb = $tpAmb;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerAplic()
    {
        return $this->verAplic;
    }

    /**
     * @param string $verAplic
     * @return RetConsReciNFe
     */
    public function setVerAplic($verAplic)
    {
        $this->verAplic = $verAplic;
        return $this;
    }

    /**
     * @return string
     */
    public function getNRec()
    {
        return $this->nRec;
    }

    /**
     * @param string $nRec
     * @return RetConsReciNFe
     */
    public function setNRec($nRec)
    {
        $this->nRec = $nRec;
        return $this;
    }

    /**
     * @return int
     */
    public function getCStat()
    {
        return $this->cStat;
    }

    /**
     * @param int $cStat
     * @return RetConsReciNFe
     */
    public function setCStat($cStat)
    {
        $this->cStat = $cStat;
        return $this;
    }

    /**
     * @return string
     */
    public function getXMotivo()
    {
        return $this->xMotivo;
    }

    /**
     * @param string $xMotivo
     * @return RetConsReciNFe
     */
    public function setXMotivo($xMotivo)
    {
        $this->xMotivo = $xMotivo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCUF()
    {
        return $this->cUF;
    }

    /**
     * @param string $cUF
     * @return RetConsReciNFe
     */
    public function setCUF($cUF)
    {
        $this->cUF = $cUF;
        return $this;
    }

    /**
     * @return string
     */
    public function getDhRecbto()
    {
        return $this->dhRecbto;
    }

    /**
     * @param string $dhRecbto
     * @return RetConsReciNFe
     */
    public function setDhRecbto($dhRecbto)
    {
        $this->dhRecbto = $dhRecbto;
        return $this;
    }

    /**
     * @return ProtNFe
     */
    public function getProtNFe()
    {
        return $this->protNFe;
    }

    /**
     * @param ProtNFe $protNFe
     * @return RetConsReciNFe
     */
    public function setProtNFe($protNFe)
    {
        $this->protNFe = $protNFe;
        return $this;
    }
}
