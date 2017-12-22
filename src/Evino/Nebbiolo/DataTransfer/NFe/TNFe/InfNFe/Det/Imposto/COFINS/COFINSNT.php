<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing COFINSNT
 */
class COFINSNT extends BaseDataTransfer
{

    /**
     * Código de Situação Tributária do COFINS:
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 05 => Operação Tributável (ST);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Gets as CST
     *
     * Código de Situação Tributária do COFINS:
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 05 => Operação Tributável (ST);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
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
     * Código de Situação Tributária do COFINS:
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 05 => Operação Tributável (ST);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
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
