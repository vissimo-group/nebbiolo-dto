<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMSSN900
 */
class ICMSSN900 extends BaseDataTransfer
{

    /**
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
     *
     * @property string $orig
     */
    protected $orig = null;

    /**
     * Tributação pelo ICMS 900 - Outros(v2.0)
     *
     * @property string $cSOSN
     */
    protected $cSOSN = null;

    /**
     * Modalidade de determinação da BC do ICMS:
     * 0 - Margem Valor Agregado (%);
     * 1 - Pauta (valor);
     * 2 - Preço Tabelado Máximo (valor);
     * 3 - Valor da Operação.
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
     * Percentual de redução da BC
     *
     * @property string $pRedBC
     */
    protected $pRedBC = null;

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
     * Modalidade de determinação da BC do ICMS ST:
     * 0 – Preço tabelado ou máximo sugerido;
     * 1 - Lista Negativa (valor);
     * 2 - Lista Positiva (valor);
     * 3 - Lista Neutra (valor);
     * 4 - Margem Valor Agregado (%);
     * 5 - Pauta (valor).
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
     * Valor da Base de cálculo do FCP.
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
     * Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     *
     * @property string $pCredSN
     */
    protected $pCredSN = null;

    /**
     * Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123
     * (Simples Nacional) (v2.0)
     *
     * @property string $vCredICMSSN
     */
    protected $vCredICMSSN = null;

    /**
     * Gets as orig
     *
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
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
     * origem da mercadoria: 0 - Nacional
     * 1 - Estrangeira - Importação direta
     * 2 - Estrangeira - Adquirida no mercado interno
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
     * Gets as cSOSN
     *
     * Tributação pelo ICMS 900 - Outros(v2.0)
     *
     * @return string
     */
    public function getCSOSN()
    {
        return $this->cSOSN;
    }

    /**
     * Sets a new cSOSN
     *
     * Tributação pelo ICMS 900 - Outros(v2.0)
     *
     * @param string $cSOSN
     * @return self
     */
    public function setCSOSN($cSOSN)
    {
        $this->cSOSN = $cSOSN;
        return $this;
    }

    /**
     * Gets as modBC
     *
     * Modalidade de determinação da BC do ICMS:
     * 0 - Margem Valor Agregado (%);
     * 1 - Pauta (valor);
     * 2 - Preço Tabelado Máximo (valor);
     * 3 - Valor da Operação.
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
     * 0 - Margem Valor Agregado (%);
     * 1 - Pauta (valor);
     * 2 - Preço Tabelado Máximo (valor);
     * 3 - Valor da Operação.
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
     * Gets as pRedBC
     *
     * Percentual de redução da BC
     *
     * @return string
     */
    public function getPRedBC()
    {
        return $this->pRedBC;
    }

    /**
     * Sets a new pRedBC
     *
     * Percentual de redução da BC
     *
     * @param string $pRedBC
     * @return self
     */
    public function setPRedBC($pRedBC)
    {
        $this->pRedBC = $pRedBC;
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
     * Gets as modBCST
     *
     * Modalidade de determinação da BC do ICMS ST:
     * 0 – Preço tabelado ou máximo sugerido;
     * 1 - Lista Negativa (valor);
     * 2 - Lista Positiva (valor);
     * 3 - Lista Neutra (valor);
     * 4 - Margem Valor Agregado (%);
     * 5 - Pauta (valor).
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
     * 0 – Preço tabelado ou máximo sugerido;
     * 1 - Lista Negativa (valor);
     * 2 - Lista Positiva (valor);
     * 3 - Lista Neutra (valor);
     * 4 - Margem Valor Agregado (%);
     * 5 - Pauta (valor).
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
     * Valor da Base de cálculo do FCP.
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
     * Valor da Base de cálculo do FCP.
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

    /**
     * Gets as pCredSN
     *
     * Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     *
     * @return string
     */
    public function getPCredSN()
    {
        return $this->pCredSN;
    }

    /**
     * Sets a new pCredSN
     *
     * Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     *
     * @param string $pCredSN
     * @return self
     */
    public function setPCredSN($pCredSN)
    {
        $this->pCredSN = $pCredSN;
        return $this;
    }

    /**
     * Gets as vCredICMSSN
     *
     * Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123
     * (Simples Nacional) (v2.0)
     *
     * @return string
     */
    public function getVCredICMSSN()
    {
        return $this->vCredICMSSN;
    }

    /**
     * Sets a new vCredICMSSN
     *
     * Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123
     * (Simples Nacional) (v2.0)
     *
     * @param string $vCredICMSSN
     * @return self
     */
    public function setVCredICMSSN($vCredICMSSN)
    {
        $this->vCredICMSSN = $vCredICMSSN;
        return $this;
    }


}

