<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMS10
 */
class ICMS10 extends BaseDataTransfer
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
     * 10 => Tributada e com cobrança do ICMS por substituição tributária
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
     * Valor da Base de cálculo do FCP.
     *
     * @property string $vBCFCP
     */
    protected $vBCFCP = null;

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
     * Modalidade de determinação da BC do ICMS ST:
     * 0 => Preço tabelado ou máximo sugerido;
     * 1 => Lista Negativa (valor);
     * 2 => Lista Positiva (valor);
     * 3 => Lista Neutra (valor);
     * 4 => Margem Valor Agregado (%);
     * 5 => Pauta (valor);
     *
     * @property string $modBCST
     */
    protected $modBCST = null;

    /**
     * Percentual da Margem de Valor Adicionado ICMS ST
     *
     * @property string $pMVAST
     */
    protected $pMVAST = null;

    /**
     * Percentual de redução da BC ICMS ST
     *
     * @property string $pRedBCST
     */
    protected $pRedBCST = null;

    /**
     * Valor da BC do ICMS ST
     *
     * @property string $vBCST
     */
    protected $vBCST = null;

    /**
     * Alíquota do ICMS ST
     *
     * @property string $pICMSST
     */
    protected $pICMSST = null;

    /**
     * Valor do ICMS ST
     *
     * @property string $vICMSST
     */
    protected $vICMSST = null;

    /**
     * Valor da Base de cálculo do FCP retido por substituicao tributaria.
     *
     * @property string $vBCFCPST
     */
    protected $vBCFCPST = null;

    /**
     * Percentual de FCP retido por substituição tributária.
     *
     * @property string $pFCPST
     */
    protected $pFCPST = null;

    /**
     * Valor do FCP retido por substituição tributária.
     *
     * @property string $vFCPST
     */
    protected $vFCPST = null;

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
     * 10 => Tributada e com cobrança do ICMS por substituição tributária
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
     * 10 => Tributada e com cobrança do ICMS por substituição tributária
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
     * Gets as vBCFCP
     *
     * Valor da Base de cálculo do FCP.
     *
     * @return string
     */
    public function getVBCFCP()
    {
        return $this->vBCFCP;
    }

    /**
     * Sets a new vBCFCP
     *
     * Valor da Base de cálculo do FCP.
     *
     * @param string $vBCFCP
     * @return self
     */
    public function setVBCFCP($vBCFCP)
    {
        $this->vBCFCP = $vBCFCP;
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

    /**
     * Gets as modBCST
     *
     * Modalidade de determinação da BC do ICMS ST:
     * 0 => Preço tabelado ou máximo sugerido;
     * 1 => Lista Negativa (valor);
     * 2 => Lista Positiva (valor);
     * 3 => Lista Neutra (valor);
     * 4 => Margem Valor Agregado (%);
     * 5 => Pauta (valor);
     *
     * @return string
     */
    public function getModBCST()
    {
        return $this->modBCST;
    }

    /**
     * Sets a new modBCST
     *
     * Modalidade de determinação da BC do ICMS ST:
     * 0 => Preço tabelado ou máximo sugerido;
     * 1 => Lista Negativa (valor);
     * 2 => Lista Positiva (valor);
     * 3 => Lista Neutra (valor);
     * 4 => Margem Valor Agregado (%);
     * 5 => Pauta (valor);
     *
     * @param string $modBCST
     * @return self
     */
    public function setModBCST($modBCST)
    {
        $this->modBCST = $modBCST;
        return $this;
    }

    /**
     * Gets as pMVAST
     *
     * Percentual da Margem de Valor Adicionado ICMS ST
     *
     * @return string
     */
    public function getPMVAST()
    {
        return $this->pMVAST;
    }

    /**
     * Sets a new pMVAST
     *
     * Percentual da Margem de Valor Adicionado ICMS ST
     *
     * @param string $pMVAST
     * @return self
     */
    public function setPMVAST($pMVAST)
    {
        $this->pMVAST = $pMVAST;
        return $this;
    }

    /**
     * Gets as pRedBCST
     *
     * Percentual de redução da BC ICMS ST
     *
     * @return string
     */
    public function getPRedBCST()
    {
        return $this->pRedBCST;
    }

    /**
     * Sets a new pRedBCST
     *
     * Percentual de redução da BC ICMS ST
     *
     * @param string $pRedBCST
     * @return self
     */
    public function setPRedBCST($pRedBCST)
    {
        $this->pRedBCST = $pRedBCST;
        return $this;
    }

    /**
     * Gets as vBCST
     *
     * Valor da BC do ICMS ST
     *
     * @return string
     */
    public function getVBCST()
    {
        return $this->vBCST;
    }

    /**
     * Sets a new vBCST
     *
     * Valor da BC do ICMS ST
     *
     * @param string $vBCST
     * @return self
     */
    public function setVBCST($vBCST)
    {
        $this->vBCST = $vBCST;
        return $this;
    }

    /**
     * Gets as pICMSST
     *
     * Alíquota do ICMS ST
     *
     * @return string
     */
    public function getPICMSST()
    {
        return $this->pICMSST;
    }

    /**
     * Sets a new pICMSST
     *
     * Alíquota do ICMS ST
     *
     * @param string $pICMSST
     * @return self
     */
    public function setPICMSST($pICMSST)
    {
        $this->pICMSST = $pICMSST;
        return $this;
    }

    /**
     * Gets as vICMSST
     *
     * Valor do ICMS ST
     *
     * @return string
     */
    public function getVICMSST()
    {
        return $this->vICMSST;
    }

    /**
     * Sets a new vICMSST
     *
     * Valor do ICMS ST
     *
     * @param string $vICMSST
     * @return self
     */
    public function setVICMSST($vICMSST)
    {
        $this->vICMSST = $vICMSST;
        return $this;
    }

    /**
     * Gets as vBCFCPST
     *
     * Valor da Base de cálculo do FCP retido por substituicao tributaria.
     *
     * @return string
     */
    public function getVBCFCPST()
    {
        return $this->vBCFCPST;
    }

    /**
     * Sets a new vBCFCPST
     *
     * Valor da Base de cálculo do FCP retido por substituicao tributaria.
     *
     * @param string $vBCFCPST
     * @return self
     */
    public function setVBCFCPST($vBCFCPST)
    {
        $this->vBCFCPST = $vBCFCPST;
        return $this;
    }

    /**
     * Gets as pFCPST
     *
     * Percentual de FCP retido por substituição tributária.
     *
     * @return string
     */
    public function getPFCPST()
    {
        return $this->pFCPST;
    }

    /**
     * Sets a new pFCPST
     *
     * Percentual de FCP retido por substituição tributária.
     *
     * @param string $pFCPST
     * @return self
     */
    public function setPFCPST($pFCPST)
    {
        $this->pFCPST = $pFCPST;
        return $this;
    }

    /**
     * Gets as vFCPST
     *
     * Valor do FCP retido por substituição tributária.
     *
     * @return string
     */
    public function getVFCPST()
    {
        return $this->vFCPST;
    }

    /**
     * Sets a new vFCPST
     *
     * Valor do FCP retido por substituição tributária.
     *
     * @param string $vFCPST
     * @return self
     */
    public function setVFCPST($vFCPST)
    {
        $this->vFCPST = $vFCPST;
        return $this;
    }

}
