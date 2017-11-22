<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing COFINSAliq
 */
class COFINSAliq extends BaseGallywixDataTransfer
{

    /**
     * Código de Situação Tributária do COFINS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Valor da BC do COFINS
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Alíquota do COFINS (em percentual)
     *
     * @property string $pCOFINS
     */
    protected $pCOFINS = null;

    /**
     * Valor do COFINS
     *
     * @property string $vCOFINS
     */
    protected $vCOFINS = null;

    /**
     * Gets as CST
     *
     * Código de Situação Tributária do COFINS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
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
     * Código de Situação Tributária do COFINS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @param string $CST
     * @return self
     */
    public function setCST($CST)
    {
        $this->CST = $CST;
        return $this;
    }

    /**
     * Gets as vBC
     *
     * Valor da BC do COFINS
     *
     * @return string
     */
    public function getVBC()
    {
        return $this->vBC;
    }

    /**
     * Sets a new vBC
     *
     * Valor da BC do COFINS
     *
     * @param string $vBC
     * @return self
     */
    public function setVBC($vBC)
    {
        $this->vBC = $vBC;
        return $this;
    }

    /**
     * Gets as pCOFINS
     *
     * Alíquota do COFINS (em percentual)
     *
     * @return string
     */
    public function getPCOFINS()
    {
        return $this->pCOFINS;
    }

    /**
     * Sets a new pCOFINS
     *
     * Alíquota do COFINS (em percentual)
     *
     * @param string $pCOFINS
     * @return self
     */
    public function setPCOFINS($pCOFINS)
    {
        $this->pCOFINS = $pCOFINS;
        return $this;
    }

    /**
     * Gets as vCOFINS
     *
     * Valor do COFINS
     *
     * @return string
     */
    public function getVCOFINS()
    {
        return $this->vCOFINS;
    }

    /**
     * Sets a new vCOFINS
     *
     * Valor do COFINS
     *
     * @param string $vCOFINS
     * @return self
     */
    public function setVCOFINS($vCOFINS)
    {
        $this->vCOFINS = $vCOFINS;
        return $this;
    }


}

