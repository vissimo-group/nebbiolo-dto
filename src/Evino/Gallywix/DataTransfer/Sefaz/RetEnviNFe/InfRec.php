<?php

namespace Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class InfRec
 * @package Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe
 */
class InfRec extends BaseGallywixDataTransfer
{
    /** @var int */
    protected $nRec;

    /** @var int */
    protected $tMed;

    /**
     * @return int
     */
    public function getNRec()
    {
        return $this->nRec;
    }

    /**
     * @param int $nRec
     * @return InfRec
     */
    public function setNRec($nRec)
    {
        $this->nRec = $nRec;
        return $this;
    }

    /**
     * @return int
     */
    public function getTMed()
    {
        return $this->tMed;
    }

    /**
     * @param int $tMed
     * @return InfRec
     */
    public function setTMed($tMed)
    {
        $this->tMed = $tMed;
        return $this;
    }
}
