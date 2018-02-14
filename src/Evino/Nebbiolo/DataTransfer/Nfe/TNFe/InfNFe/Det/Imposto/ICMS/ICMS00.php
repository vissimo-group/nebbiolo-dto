<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMS00
 */
class ICMS00 extends BaseDataTransfer
{
    /**
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @property string $orig
     */
    protected $orig = null;

    /**
     * Tributção pelo ICMS
     * 00 => Tributada integralmente
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @property string $modBC
     */
    protected $modBC = null;

    /**
     * Valor da BC do ICMS
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Alíquota do ICMS
     *
     * @property string $pICMS
     */
    protected $pICMS = null;

    /**
     * Valor do ICMS
     *
     * @property string $vICMS
     */
    protected $vICMS = null;

    /**
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @property string $pFCP
     */
    protected $pFCP = null;

    /**
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @property string $vFCP
     */
    protected $vFCP = null;

    /**
     * Gets as orig
     *
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @return string
     */
    public function getOrig()
    {
        return $this->orig;
    }

    /**
     * Sets a new orig
     *
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @param string $orig
     * @return self
     */
    public function setOrig($orig)
    {
        $this->orig = $orig;
        return $this;
    }

    /**
     * Gets as CST
     *
     * Tributção pelo ICMS
     * 00 => Tributada integralmente
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
     * Tributção pelo ICMS
     * 00 => Tributada integralmente
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
     * Gets as modBC
     *
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @return string
     */
    public function getModBC()
    {
        return $this->modBC;
    }

    /**
     * Sets a new modBC
     *
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @param string $modBC
     * @return self
     */
    public function setModBC($modBC)
    {
        $this->modBC = $modBC;
        return $this;
    }

    /**
     * Gets as vBC
     *
     * Valor da BC do ICMS
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
     * Valor da BC do ICMS
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
     * Gets as pICMS
     *
     * Alíquota do ICMS
     *
     * @return string
     */
    public function getPICMS()
    {
        return $this->pICMS;
    }

    /**
     * Sets a new pICMS
     *
     * Alíquota do ICMS
     *
     * @param string $pICMS
     * @return self
     */
    public function setPICMS($pICMS)
    {
        $this->pICMS = $pICMS;
        return $this;
    }

    /**
     * Gets as vICMS
     *
     * Valor do ICMS
     *
     * @return string
     */
    public function getVICMS()
    {
        return $this->vICMS;
    }

    /**
     * Sets a new vICMS
     *
     * Valor do ICMS
     *
     * @param string $vICMS
     * @return self
     */
    public function setVICMS($vICMS)
    {
        $this->vICMS = $vICMS;
        return $this;
    }

    /**
     * Gets as pFCP
     *
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return string
     */
    public function getPFCP()
    {
        return $this->pFCP;
    }

    /**
     * Sets a new pFCP
     *
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @param string $pFCP
     * @return self
     */
    public function setPFCP($pFCP)
    {
        $this->pFCP = $pFCP;
        return $this;
    }

    /**
     * Gets as vFCP
     *
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return string
     */
    public function getVFCP()
    {
        return $this->vFCP;
    }

    /**
     * Sets a new vFCP
     *
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @param string $vFCP
     * @return self
     */
    public function setVFCP($vFCP)
    {
        $this->vFCP = $vFCP;
        return $this;
    }
}
