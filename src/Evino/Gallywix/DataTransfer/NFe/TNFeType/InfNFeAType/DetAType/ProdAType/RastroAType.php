<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ProdAType;

/**
 * Class representing RastroAType
 */
class RastroAType
{

    /**
     * Número do lote do produto.
     *
     * @property string $nLote
     */
    private $nLote = null;

    /**
     * Quantidade de produto no lote.
     *
     * @property string $qLote
     */
    private $qLote = null;

    /**
     * Data de fabricação/produção. Formato "AAAA-MM-DD".
     *
     * @property string $dFab
     */
    private $dFab = null;

    /**
     * Data de validade. Informar o último dia do mês caso a validade não
     * especifique o dia. Formato "AAAA-MM-DD".
     *
     * @property string $dVal
     */
    private $dVal = null;

    /**
     * @property string $cAgreg
     */
    private $cAgreg = null;

    /**
     * Gets as nLote
     *
     * Número do lote do produto.
     *
     * @return string
     */
    public function getNLote()
    {
        return $this->nLote;
    }

    /**
     * Sets a new nLote
     *
     * Número do lote do produto.
     *
     * @param string $nLote
     * @return self
     */
    public function setNLote($nLote)
    {
        $this->nLote = $nLote;
        return $this;
    }

    /**
     * Gets as qLote
     *
     * Quantidade de produto no lote.
     *
     * @return string
     */
    public function getQLote()
    {
        return $this->qLote;
    }

    /**
     * Sets a new qLote
     *
     * Quantidade de produto no lote.
     *
     * @param string $qLote
     * @return self
     */
    public function setQLote($qLote)
    {
        $this->qLote = $qLote;
        return $this;
    }

    /**
     * Gets as dFab
     *
     * Data de fabricação/produção. Formato "AAAA-MM-DD".
     *
     * @return string
     */
    public function getDFab()
    {
        return $this->dFab;
    }

    /**
     * Sets a new dFab
     *
     * Data de fabricação/produção. Formato "AAAA-MM-DD".
     *
     * @param string $dFab
     * @return self
     */
    public function setDFab($dFab)
    {
        $this->dFab = $dFab;
        return $this;
    }

    /**
     * Gets as dVal
     *
     * Data de validade. Informar o último dia do mês caso a validade não
     * especifique o dia. Formato "AAAA-MM-DD".
     *
     * @return string
     */
    public function getDVal()
    {
        return $this->dVal;
    }

    /**
     * Sets a new dVal
     *
     * Data de validade. Informar o último dia do mês caso a validade não
     * especifique o dia. Formato "AAAA-MM-DD".
     *
     * @param string $dVal
     * @return self
     */
    public function setDVal($dVal)
    {
        $this->dVal = $dVal;
        return $this;
    }

    /**
     * Gets as cAgreg
     *
     * @return string
     */
    public function getCAgreg()
    {
        return $this->cAgreg;
    }

    /**
     * Sets a new cAgreg
     *
     * @param string $cAgreg
     * @return self
     */
    public function setCAgreg($cAgreg)
    {
        $this->cAgreg = $cAgreg;
        return $this;
    }


}

