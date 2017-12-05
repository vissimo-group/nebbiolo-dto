<?php

namespace Evino\Gallywix\DataTransfer\Sefaz;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe\Attributes;
use Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe\InfRec;

/**
 * Class RetEnviNFe
 * @package Evino\Gallywix\DataTransfer\Sefaz
 */
class RetEnviNFe extends BaseGallywixDataTransfer
{
    /** @var Attributes */
    protected $attributes;

    /** @var int */
    protected $tpAmb;

    /** @var string */
    protected $verAplic;

    /** @var int */
    protected $cStat;

    /** @var string */
    protected $xMotivo;

    /** @var string */
    protected $cUF;

    /** @var string */
    protected $dhRecbto;

    /** @var InfRec */
    protected $infRec;

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attributes $attributes
     * @return RetEnviNFe
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
     * @return RetEnviNFe
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
     * @return RetEnviNFe
     */
    public function setVerAplic($verAplic)
    {
        $this->verAplic = $verAplic;
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
     * @return RetEnviNFe
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
     * @return RetEnviNFe
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
     * @return RetEnviNFe
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
     * @return RetEnviNFe
     */
    public function setDhRecbto($dhRecbto)
    {
        $this->dhRecbto = $dhRecbto;
        return $this;
    }

    /**
     * @return InfRec
     */
    public function getInfRec()
    {
        return $this->infRec;
    }

    /**
     * @param InfRec $infRec
     * @return RetEnviNFe
     */
    public function setInfRec($infRec)
    {
        $this->infRec = $infRec;
        return $this;
    }
}
