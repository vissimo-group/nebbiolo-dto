<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

/**
 * Class representing PIS
 */
class PIS
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
     * $pISAliq
     */
    private $pISAliq = null;

    /**
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde
     * $pISQtde
     */
    private $pISQtde = null;

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
     * $pISNT
     */
    private $pISNT = null;

    /**
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
     * $pISOutr
     */
    private $pISOutr = null;

    /**
     * Gets as pISAliq
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
        return $this->pISAliq;
    }

	/**
	 * Sets a new pISAliq
	 *
	 * Código de Situação Tributária do PIS.
	 *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
	 * Alíquota Normal (Cumulativo/Não Cumulativo);
	 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
	 * Diferenciada);
	 *
	 * @param PIS\PISAliq $pISAliq
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISAliq
	 * $pISAliq
	 */
    public function setPISAliq(PIS\PISAliq $pISAliq)
    {
        $this->pISAliq = $pISAliq;
        return $this;
    }

    /**
     * Gets as pISQtde
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
        return $this->pISQtde;
    }

	/**
	 * Sets a new pISQtde
	 *
	 * Código de Situação Tributária do PIS.
	 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
	 * por Unidade de Produto;
	 *
	 * @param PIS\PISQtde $pISQtde
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISQtde
	 * $pISQtde
	 */
    public function setPISQtde(PIS\PISQtde $pISQtde)
    {
        $this->pISQtde = $pISQtde;
        return $this;
    }

    /**
     * Gets as pISNT
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
        return $this->pISNT;
    }

	/**
	 * Sets a new pISNT
	 *
	 * Código de Situação Tributária do PIS.
	 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
	 * 06 - Operação Tributável - Alíquota Zero;
	 * 07 - Operação Isenta da contribuição;
	 * 08 - Operação Sem Incidência da contribuição;
	 * 09 - Operação com suspensão da contribuição;
	 *
	 * @param PIS\PISNT $pISNT
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISNT
	 * $pISNT
	 */
    public function setPISNT(PIS\PISNT $pISNT)
    {
        $this->pISNT = $pISNT;
        return $this;
    }

    /**
     * Gets as pISOutr
     *
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
     */
    public function getPISOutr()
    {
        return $this->pISOutr;
    }

	/**
	 * Sets a new pISOutr
	 *
	 * Código de Situação Tributária do PIS.
	 * 99 - Outras Operações.
	 *
	 * @param PIS\PISOutr $pISOutr
	 * @return PIS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS\PISOutr
	 * $pISOutr
	 */
    public function setPISOutr(PIS\PISOutr $pISOutr)
    {
        $this->pISOutr = $pISOutr;
        return $this;
    }


}

