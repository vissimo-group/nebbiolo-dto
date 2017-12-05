<?php

namespace Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe\ProtNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class InfProt
 * @package Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe\ProtNFe
 */
class InfProt extends BaseGallywixDataTransfer
{
    /** @var int */
    protected $tpAmb;

    /** @var string */
    protected $verAplic;

    /** @var string */
    protected $chNFe;

    /** @var string */
    protected $dhRecbto;

    /** @var string */
    protected $digVal;

    /** @var int */
    protected $cStat;

    /** @var string */
    protected $xMotivo;

    /**
     * @return int
     */
    public function getTpAmb()
    {
        return $this->tpAmb;
    }

    /**
     * @param int $tpAmb
     * @return InfProt
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
     * @return InfProt
     */
    public function setVerAplic($verAplic)
    {
        $this->verAplic = $verAplic;
        return $this;
    }

    /**
     * @return string
     */
    public function getChNFe()
    {
        return $this->chNFe;
    }

    /**
     * @param string $chNFe
     * @return InfProt
     */
    public function setChNFe($chNFe)
    {
        $this->chNFe = $chNFe;
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
     * @return InfProt
     */
    public function setDhRecbto($dhRecbto)
    {
        $this->dhRecbto = $dhRecbto;
        return $this;
    }

    /**
     * @return string
     */
    public function getDigVal()
    {
        return $this->digVal;
    }

    /**
     * @param string $digVal
     * @return InfProt
     */
    public function setDigVal($digVal)
    {
        $this->digVal = $digVal;
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
     * @return InfProt
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
     * @return InfProt
     */
    public function setXMotivo($xMotivo)
    {
        $this->xMotivo = $xMotivo;
        return $this;
    }
}
