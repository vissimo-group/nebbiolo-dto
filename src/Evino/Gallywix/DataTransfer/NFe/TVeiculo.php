<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing TVeiculo
 *
 * Tipo Dados do Veículo
 * XSD Type: TVeiculo
 */
class TVeiculo extends BaseGallywixDataTransfer
{

    /**
     * Placa do veículo (NT2011/004)
     *
     * @property string $placa
     */
    protected $placa = null;

    /**
     * Sigla da UF
     *
     * @property string $UF
     */
    protected $UF = null;

    /**
     * Registro Nacional de Transportador de Carga (ANTT)
     *
     * @property string $RNTC
     */
    protected $RNTC = null;

    /**
     * Gets as placa
     *
     * Placa do veículo (NT2011/004)
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Sets a new placa
     *
     * Placa do veículo (NT2011/004)
     *
     * @param string $placa
     * @return self
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
        return $this;
    }

    /**
     * Gets as UF
     *
     * Sigla da UF
     *
     * @return string
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Sets a new UF
     *
     * Sigla da UF
     *
     * @param string $UF
     * @return self
     */
    public function setUF($UF)
    {
        $this->UF = $UF;
        return $this;
    }

    /**
     * Gets as rNTC
     *
     * Registro Nacional de Transportador de Carga (ANTT)
     *
     * @return string
     */
    public function getRNTC()
    {
        return $this->RNTC;
    }

    /**
     * Sets a new rNTC
     *
     * Registro Nacional de Transportador de Carga (ANTT)
     *
     * @param string $RNTC
     * @return self
     */
    public function setRNTC($RNTC)
    {
        $this->RNTC = $RNTC;
        return $this;
    }


}

