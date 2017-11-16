<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing Adi
 */
class Adi extends AbstractJsonSerializable
{

    /**
     * Número da Adição
     *
     * @property string $nAdicao
     */
    protected $nAdicao = null;

    /**
     * Número seqüencial do item dentro da Adição
     *
     * @property string $nSeqAdic
     */
    protected $nSeqAdic = null;

    /**
     * Código do fabricante estrangeiro (usado nos sistemas internos de informação
     * do emitente da NF-e)
     *
     * @property string $cFabricante
     */
    protected $cFabricante = null;

    /**
     * Valor do desconto do item da DI – adição
     *
     * @property string $vDescDI
     */
    protected $vDescDI = null;

    /**
     * Número do ato concessório de Drawback
     *
     * @property string $nDraw
     */
    protected $nDraw = null;

    /**
     * Gets as nAdicao
     *
     * Número da Adição
     *
     * @return string
     */
    public function getNAdicao()
    {
        return $this->nAdicao;
    }

    /**
     * Sets a new nAdicao
     *
     * Número da Adição
     *
     * @param string $nAdicao
     * @return self
     */
    public function setNAdicao($nAdicao)
    {
        $this->nAdicao = $nAdicao;
        return $this;
    }

    /**
     * Gets as nSeqAdic
     *
     * Número seqüencial do item dentro da Adição
     *
     * @return string
     */
    public function getNSeqAdic()
    {
        return $this->nSeqAdic;
    }

    /**
     * Sets a new nSeqAdic
     *
     * Número seqüencial do item dentro da Adição
     *
     * @param string $nSeqAdic
     * @return self
     */
    public function setNSeqAdic($nSeqAdic)
    {
        $this->nSeqAdic = $nSeqAdic;
        return $this;
    }

    /**
     * Gets as cFabricante
     *
     * Código do fabricante estrangeiro (usado nos sistemas internos de informação
     * do emitente da NF-e)
     *
     * @return string
     */
    public function getCFabricante()
    {
        return $this->cFabricante;
    }

    /**
     * Sets a new cFabricante
     *
     * Código do fabricante estrangeiro (usado nos sistemas internos de informação
     * do emitente da NF-e)
     *
     * @param string $cFabricante
     * @return self
     */
    public function setCFabricante($cFabricante)
    {
        $this->cFabricante = $cFabricante;
        return $this;
    }

    /**
     * Gets as vDescDI
     *
     * Valor do desconto do item da DI – adição
     *
     * @return string
     */
    public function getVDescDI()
    {
        return $this->vDescDI;
    }

    /**
     * Sets a new vDescDI
     *
     * Valor do desconto do item da DI – adição
     *
     * @param string $vDescDI
     * @return self
     */
    public function setVDescDI($vDescDI)
    {
        $this->vDescDI = $vDescDI;
        return $this;
    }

    /**
     * Gets as nDraw
     *
     * Número do ato concessório de Drawback
     *
     * @return string
     */
    public function getNDraw()
    {
        return $this->nDraw;
    }

    /**
     * Sets a new nDraw
     *
     * Número do ato concessório de Drawback
     *
     * @param string $nDraw
     * @return self
     */
    public function setNDraw($nDraw)
    {
        $this->nDraw = $nDraw;
        return $this;
    }


}

