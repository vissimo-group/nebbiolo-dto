<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing PIS
 */
class PIS extends BaseDataTransfer
{

    /**
     * Código de Situação Tributária do PIS.
     * 01 => Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 => Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     *
     * @property PIS\PISAliq $PISAliq
     */
    protected $PISAliq = null;

    /**
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @property PIS\PISQtde $PISQtde
     */
    protected $PISQtde = null;

    /**
     * Código de Situação Tributária do PIS.
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
     *
     * @property PIS\PISNT $PISNT
     */
    protected $PISNT = null;

    /**
     * Código de Situação Tributária do PIS.
     * 99 => Outras Operações.
     *
     * @property PIS\PISOutr $PISOutr
     */
    protected $PISOutr = null;


    /**
     * @return \stdClass
     */
    public function toNFeTag()
    {
        if (!is_null($this->getPISAliq())) {
            return $this->getPISAliq()->toNFeTag();
        }

        if (!is_null($this->getPISQtde())) {
            return $this->getPISQtde()->toNFeTag();
        }

        if (!is_null($this->getPISNT())) {
            return $this->getPISNT()->toNFeTag();
        }

        if (!is_null($this->getPISOutr())) {
            return $this->getPISOutr()->toNFeTag();
        }

        return parent::toNFeTag();
    }

    /**
     * Gets as PISAliq
     *
     * Código de Situação Tributária do PIS.
     * 01 => Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 => Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     *
     * @return PIS\PISAliq
     */
    public function getPISAliq()
    {
        return $this->PISAliq;
    }

    /**
     * Gets as PISQtde
     *
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @return PIS\PISQtde
     */
    public function getPISQtde()
    {
        return $this->PISQtde;
    }

    /**
     * Sets a new PISAliq
     *
     * Código de Situação Tributária do PIS.
     * 01 => Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 => Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     *
     * @param PIS\PISAliq $PISAliq
     * @return PIS
     * @internal param $ PIS\PISAliq* PIS\PISAliq $PISAliq
     */
    public function setPISAliq(PIS\PISAliq $PISAliq)
    {
        $this->PISAliq = $PISAliq;
        return $this;
    }

    /**
     * Sets a new PISQtde
     *
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @param PIS\PISQtde $PISQtde
     * @return PIS
     * @internal param $ PIS\PISQtde* PIS\PISQtde $PISQtde
     */
    public function setPISQtde(PIS\PISQtde $PISQtde)
    {
        $this->PISQtde = $PISQtde;
        return $this;
    }

    /**
     * Gets as PISNT
     *
     * Código de Situação Tributária do PIS.
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
     *
     * @return PIS\PISNT
     */
    public function getPISNT()
    {
        return $this->PISNT;
    }

    /**
     * Sets a new PISNT
     *
     * Código de Situação Tributária do PIS.
     * 04 => Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 => Operação Tributável - Alíquota Zero;
     * 07 => Operação Isenta da contribuição;
     * 08 => Operação Sem Incidência da contribuição;
     * 09 => Operação com suspensão da contribuição;
     *
     * @param PIS\PISNT $PISNT
     * @return PIS
     * @internal param $ PIS\PISNT* PIS\PISNT $PISNT
     */
    public function setPISNT(PIS\PISNT $PISNT)
    {
        $this->PISNT = $PISNT;
        return $this;
    }

    /**
     * Gets as PISOutr
     *
     * Código de Situação Tributária do PIS.
     * 99 => Outras Operações.
     *
     * @return PIS\PISOutr
     */
    public function getPISOutr()
    {
        return $this->PISOutr;
    }

    /**
     * Sets a new PISOutr
     *
     * Código de Situação Tributária do PIS.
     * 99 => Outras Operações.
     *
     * @param PIS\PISOutr $PISOutr
     * @return PIS
     * @internal param $ PIS\PISOutr* PIS\PISOutr $PISOutr
     */
    public function setPISOutr(PIS\PISOutr $PISOutr)
    {
        $this->PISOutr = $PISOutr;
        return $this;
    }

}
