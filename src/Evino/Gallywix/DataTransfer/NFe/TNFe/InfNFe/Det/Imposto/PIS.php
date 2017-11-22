<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing PIS
 */
class PIS extends BaseGallywixDataTransfer
{

    /**
     * Código de Situação Tributária do PIS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq
     * $PISAliq
     */
    protected $PISAliq = null;

    /**
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde
     * $PISQtde
     */
    protected $PISQtde = null;

    /**
     * Código de Situação Tributária do PIS.
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT
     * $PISNT
     */
    protected $PISNT = null;

    /**
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
     * $PISOutr
     */
    protected $PISOutr = null;

    /**
     * Gets as PISAliq
     *
     * Código de Situação Tributária do PIS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq
     */
    public function getPISAliq()
    {
        return $this->PISAliq;
    }

	/**
	 * Sets a new PISAliq
	 *
	 * Código de Situação Tributária do PIS.
	 *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
	 * Alíquota Normal (Cumulativo/Não Cumulativo);
	 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
	 * Diferenciada);
	 *
	 * @param PIS\PISAliq $PISAliq
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq
	 * $PISAliq
	 */
    public function setPISAliq(PIS\PISAliq $PISAliq)
    {
        $this->PISAliq = $PISAliq;
        return $this;
    }

    /**
     * Gets as PISQtde
     *
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde
     */
    public function getPISQtde()
    {
        return $this->PISQtde;
    }

	/**
	 * Sets a new PISQtde
	 *
	 * Código de Situação Tributária do PIS.
	 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
	 * por Unidade de Produto;
	 *
	 * @param PIS\PISQtde $PISQtde
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde
	 * $PISQtde
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
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT
     */
    public function getPISNT()
    {
        return $this->PISNT;
    }

	/**
	 * Sets a new PISNT
	 *
	 * Código de Situação Tributária do PIS.
	 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
	 * 06 - Operação Tributável - Alíquota Zero;
	 * 07 - Operação Isenta da contribuição;
	 * 08 - Operação Sem Incidência da contribuição;
	 * 09 - Operação com suspensão da contribuição;
	 *
	 * @param PIS\PISNT $PISNT
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT
	 * $PISNT
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
     * 99 - Outras Operações.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
     */
    public function getPISOutr()
    {
        return $this->PISOutr;
    }

	/**
	 * Sets a new PISOutr
	 *
	 * Código de Situação Tributária do PIS.
	 * 99 - Outras Operações.
	 *
	 * @param PIS\PISOutr $PISOutr
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
	 * $PISOutr
	 */
    public function setPISOutr(PIS\PISOutr $PISOutr)
    {
        $this->PISOutr = $PISOutr;
        return $this;
    }


}

