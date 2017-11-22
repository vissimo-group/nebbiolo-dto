<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing COFINS
 */
class COFINS extends AbstractJsonSerializable
{

    /**
     * Código de Situação Tributária do COFINS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq
     * $COFINSAliq
     */
    protected $COFINSAliq = null;

    /**
     * Código de Situação Tributária do COFINS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde
     * $COFINSQtde
     */
    protected $COFINSQtde = null;

    /**
     * Código de Situação Tributária do COFINS:
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT
     * $COFINSNT
     */
    protected $COFINSNT = null;

    /**
     * Código de Situação Tributária do COFINS:
     * 49 - Outras Operações de Saída
     * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita
     * Tributada no Mercado Interno
     * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita
     * Não Tributada no Mercado Interno
     * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de
     * Exportação
     * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
     * Não-Tributadas no Mercado Interno
     * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no
     * Mercado Interno e de Exportação
     * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no
     * Mercado Interno e de Exportação
     * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
     * Não-Tributadas no Mercado Interno, e de Exportação
     * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita Tributada no Mercado Interno
     * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita Não-Tributada no Mercado Interno
     * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita de Exportação
     * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas e Não-Tributadas no Mercado Interno
     * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas no Mercado Interno e de Exportação
     * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Não-Tributadas no Mercado Interno e de Exportação
     * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
     * 67 - Crédito Presumido - Outras Operações
     * 70 - Operação de Aquisição sem Direito a Crédito
     * 71 - Operação de Aquisição com Isenção
     * 72 - Operação de Aquisição com Suspensão
     * 73 - Operação de Aquisição a Alíquota Zero
     * 74 - Operação de Aquisição sem Incidência da Contribuição
     * 75 - Operação de Aquisição por Substituição Tributária
     * 98 - Outras Operações de Entrada
     * 99 - Outras Operações.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr
     * $COFINSOutr
     */
    protected $COFINSOutr = null;

    /**
     * Gets as COFINSAliq
     *
     * Código de Situação Tributária do COFINS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq
     */
    public function getCOFINSAliq()
    {
        return $this->COFINSAliq;
    }

	/**
	 * Sets a new COFINSAliq
	 *
	 * Código de Situação Tributária do COFINS.
	 *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
	 * Alíquota Normal (Cumulativo/Não Cumulativo);
	 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
	 * Diferenciada);
	 *
	 * @param COFINS\COFINSAliq $COFINSAliq
	 * @return COFINS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq
	 * $COFINSAliq
	 */
    public function setCOFINSAliq(COFINS\COFINSAliq $COFINSAliq)
    {
        $this->COFINSAliq = $COFINSAliq;
        return $this;
    }

    /**
     * Gets as COFINSQtde
     *
     * Código de Situação Tributária do COFINS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde
     */
    public function getCOFINSQtde()
    {
        return $this->COFINSQtde;
    }

	/**
	 * Sets a new COFINSQtde
	 *
	 * Código de Situação Tributária do COFINS.
	 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
	 * por Unidade de Produto;
	 *
	 * @param COFINS\COFINSQtde $COFINSQtde
	 * @return COFINS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde
	 * $COFINSQtde
	 */
    public function setCOFINSQtde(COFINS\COFINSQtde $COFINSQtde)
    {
        $this->COFINSQtde = $COFINSQtde;
        return $this;
    }

    /**
     * Gets as COFINSNT
     *
     * Código de Situação Tributária do COFINS:
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT
     */
    public function getCOFINSNT()
    {
        return $this->COFINSNT;
    }

	/**
	 * Sets a new COFINSNT
	 *
	 * Código de Situação Tributária do COFINS:
	 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
	 * 06 - Operação Tributável - Alíquota Zero;
	 * 07 - Operação Isenta da contribuição;
	 * 08 - Operação Sem Incidência da contribuição;
	 * 09 - Operação com suspensão da contribuição;
	 *
	 * @param COFINS\COFINSNT $COFINSNT
	 * @return COFINS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT
	 * $COFINSNT
	 */
    public function setCOFINSNT(COFINS\COFINSNT $COFINSNT)
    {
        $this->COFINSNT = $COFINSNT;
        return $this;
    }

    /**
     * Gets as COFINSOutr
     *
     * Código de Situação Tributária do COFINS:
     * 49 - Outras Operações de Saída
     * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita
     * Tributada no Mercado Interno
     * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita
     * Não Tributada no Mercado Interno
     * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de
     * Exportação
     * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
     * Não-Tributadas no Mercado Interno
     * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no
     * Mercado Interno e de Exportação
     * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no
     * Mercado Interno e de Exportação
     * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
     * Não-Tributadas no Mercado Interno, e de Exportação
     * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita Tributada no Mercado Interno
     * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita Não-Tributada no Mercado Interno
     * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
     * Receita de Exportação
     * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas e Não-Tributadas no Mercado Interno
     * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas no Mercado Interno e de Exportação
     * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Não-Tributadas no Mercado Interno e de Exportação
     * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
     * Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
     * 67 - Crédito Presumido - Outras Operações
     * 70 - Operação de Aquisição sem Direito a Crédito
     * 71 - Operação de Aquisição com Isenção
     * 72 - Operação de Aquisição com Suspensão
     * 73 - Operação de Aquisição a Alíquota Zero
     * 74 - Operação de Aquisição sem Incidência da Contribuição
     * 75 - Operação de Aquisição por Substituição Tributária
     * 98 - Outras Operações de Entrada
     * 99 - Outras Operações.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr
     */
    public function getCOFINSOutr()
    {
        return $this->COFINSOutr;
    }

	/**
	 * Sets a new COFINSOutr
	 *
	 * Código de Situação Tributária do COFINS:
	 * 49 - Outras Operações de Saída
	 * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita
	 * Tributada no Mercado Interno
	 * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita
	 * Não Tributada no Mercado Interno
	 * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de
	 * Exportação
	 * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
	 * Não-Tributadas no Mercado Interno
	 * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no
	 * Mercado Interno e de Exportação
	 * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no
	 * Mercado Interno e de Exportação
	 * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e
	 * Não-Tributadas no Mercado Interno, e de Exportação
	 * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
	 * Receita Tributada no Mercado Interno
	 * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
	 * Receita Não-Tributada no Mercado Interno
	 * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a
	 * Receita de Exportação
	 * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
	 * Tributadas e Não-Tributadas no Mercado Interno
	 * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
	 * Tributadas no Mercado Interno e de Exportação
	 * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
	 * Não-Tributadas no Mercado Interno e de Exportação
	 * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas
	 * Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
	 * 67 - Crédito Presumido - Outras Operações
	 * 70 - Operação de Aquisição sem Direito a Crédito
	 * 71 - Operação de Aquisição com Isenção
	 * 72 - Operação de Aquisição com Suspensão
	 * 73 - Operação de Aquisição a Alíquota Zero
	 * 74 - Operação de Aquisição sem Incidência da Contribuição
	 * 75 - Operação de Aquisição por Substituição Tributária
	 * 98 - Outras Operações de Entrada
	 * 99 - Outras Operações.
	 *
	 * @param COFINS\COFINSOutr $COFINSOutr
	 * @return COFINS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr
	 * $COFINSOutr
	 */
    public function setCOFINSOutr(COFINS\COFINSOutr $COFINSOutr)
    {
        $this->COFINSOutr = $COFINSOutr;
        return $this;
    }


}

