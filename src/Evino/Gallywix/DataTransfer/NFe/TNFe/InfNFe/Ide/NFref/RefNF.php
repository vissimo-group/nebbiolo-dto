<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing RefNF
 */
class RefNF extends BaseGallywixDataTransfer
{

    /**
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     *
     * @property string $cUF
     */
    protected $cUF = null;

    /**
     * AAMM da emissão
     *
     * @property string $aAMM
     */
    protected $aAMM = null;

    /**
     * CNPJ do emitente do documento fiscal referenciado
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A e 02 para
     * NF modelo 02
     *
     * @property string $mod
     */
    protected $mod = null;

    /**
     * Série do Documento Fiscal, informar zero se inexistente
     *
     * @property string $serie
     */
    protected $serie = null;

    /**
     * Número do Documento Fiscal
     *
     * @property string $nNF
     */
    protected $nNF = null;

    /**
     * Gets as cUF
     *
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     *
     * @return string
     */
    public function getCUF()
    {
        return $this->cUF;
    }

    /**
     * Sets a new cUF
     *
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     *
     * @param string $cUF
     * @return self
     */
    public function setCUF($cUF)
    {
        $this->cUF = $cUF;
        return $this;
    }

    /**
     * Gets as aAMM
     *
     * AAMM da emissão
     *
     * @return string
     */
    public function getAAMM()
    {
        return $this->aAMM;
    }

    /**
     * Sets a new aAMM
     *
     * AAMM da emissão
     *
     * @param string $aAMM
     * @return self
     */
    public function setAAMM($aAMM)
    {
        $this->aAMM = $aAMM;
        return $this;
    }

    /**
     * Gets as CNPJ
     *
     * CNPJ do emitente do documento fiscal referenciado
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Sets a new CNPJ
     *
     * CNPJ do emitente do documento fiscal referenciado
     *
     * @param string $CNPJ
     * @return self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    /**
     * Gets as mod
     *
     * Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A e 02 para
     * NF modelo 02
     *
     * @return string
     */
    public function getMod()
    {
        return $this->mod;
    }

    /**
     * Sets a new mod
     *
     * Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A e 02 para
     * NF modelo 02
     *
     * @param string $mod
     * @return self
     */
    public function setMod($mod)
    {
        $this->mod = $mod;
        return $this;
    }

    /**
     * Gets as serie
     *
     * Série do Documento Fiscal, informar zero se inexistente
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Sets a new serie
     *
     * Série do Documento Fiscal, informar zero se inexistente
     *
     * @param string $serie
     * @return self
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * Gets as nNF
     *
     * Número do Documento Fiscal
     *
     * @return string
     */
    public function getNNF()
    {
        return $this->nNF;
    }

    /**
     * Sets a new nNF
     *
     * Número do Documento Fiscal
     *
     * @param string $nNF
     * @return self
     */
    public function setNNF($nNF)
    {
        $this->nNF = $nNF;
        return $this;
    }


}

