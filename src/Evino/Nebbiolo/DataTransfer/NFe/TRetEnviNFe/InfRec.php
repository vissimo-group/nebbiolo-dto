<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TRetEnviNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing InfRec
 */
class InfRec extends BaseDataTransfer
{

    /**
     * Número do Recibo
     *
     * @property string $nRec
     */
    protected $nRec = null;

    /**
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @property string $tMed
     */
    protected $tMed = null;

    /**
     * Gets as nRec
     *
     * Número do Recibo
     *
     * @return string
     */
    public function getNRec()
    {
        return $this->nRec;
    }

    /**
     * Sets a new nRec
     *
     * Número do Recibo
     *
     * @param string $nRec
     * @return self
     */
    public function setNRec($nRec)
    {
        $this->nRec = $nRec;
        return $this;
    }

    /**
     * Gets as tMed
     *
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @return string
     */
    public function getTMed()
    {
        return $this->tMed;
    }

    /**
     * Sets a new tMed
     *
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @param string $tMed
     * @return self
     */
    public function setTMed($tMed)
    {
        $this->tMed = $tMed;
        return $this;
    }


}

