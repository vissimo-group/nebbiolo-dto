<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TIpi;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing IPINT
 */
class IPINT extends AbstractJsonSerializable
{

    /**
     * Código da Situação Tributária do IPI:
     * 01-Entrada tributada com alíquota zero
     * 02-Entrada isenta
     * 03-Entrada não-tributada
     * 04-Entrada imune
     * 05-Entrada com suspensão
     * 51-Saída tributada com alíquota zero
     * 52-Saída isenta
     * 53-Saída não-tributada
     * 54-Saída imune
     * 55-Saída com suspensão
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Gets as CST
     *
     * Código da Situação Tributária do IPI:
     * 01-Entrada tributada com alíquota zero
     * 02-Entrada isenta
     * 03-Entrada não-tributada
     * 04-Entrada imune
     * 05-Entrada com suspensão
     * 51-Saída tributada com alíquota zero
     * 52-Saída isenta
     * 53-Saída não-tributada
     * 54-Saída imune
     * 55-Saída com suspensão
     *
     * @return string
     */
    public function getCST()
    {
        return $this->CST;
    }

    /**
     * Sets a new CST
     *
     * Código da Situação Tributária do IPI:
     * 01-Entrada tributada com alíquota zero
     * 02-Entrada isenta
     * 03-Entrada não-tributada
     * 04-Entrada imune
     * 05-Entrada com suspensão
     * 51-Saída tributada com alíquota zero
     * 52-Saída isenta
     * 53-Saída não-tributada
     * 54-Saída imune
     * 55-Saída com suspensão
     *
     * @param string $CST
     * @return self
     */
    public function setCST($CST)
    {
        $this->CST = $CST;
        return $this;
    }


}

