<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing RefNFP
 */
class RefNFP extends BaseGallywixDataTransfer
{

    /**
     * Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV
     * - Tabela de UF, Município e País)
     *
     * @property string $cUF
     */
    protected $cUF = null;

    /**
     * AAMM da emissão da NF de produtor
     *
     * @property string $aAMM
     */
    protected $aAMM = null;

    /**
     * CNPJ do emitente da NF de produtor
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * CPF do emitente da NF de produtor
     *
     * @property string $CPF
     */
    protected $CPF = null;

    /**
     * IE do emitente da NF de Produtor
     *
     * @property string $IE
     */
    protected $IE = null;

    /**
     * Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor ou 01
     * para NF Avulsa
     *
     * @property string $mod
     */
    protected $mod = null;

    /**
     * Série do Documento Fiscal, informar zero se inexistentesérie
     *
     * @property string $serie
     */
    protected $serie = null;

    /**
     * Número do Documento Fiscal - 1 – 999999999
     *
     * @property string $nNF
     */
    protected $nNF = null;

    /**
     * Gets as cUF
     *
     * Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV
     * - Tabela de UF, Município e País)
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
     * Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV
     * - Tabela de UF, Município e País)
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
     * AAMM da emissão da NF de produtor
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
     * AAMM da emissão da NF de produtor
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
     * CNPJ do emitente da NF de produtor
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
     * CNPJ do emitente da NF de produtor
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
     * Gets as CPF
     *
     * CPF do emitente da NF de produtor
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Sets a new CPF
     *
     * CPF do emitente da NF de produtor
     *
     * @param string $CPF
     * @return self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
        return $this;
    }

    /**
     * Gets as IE
     *
     * IE do emitente da NF de Produtor
     *
     * @return string
     */
    public function getIE()
    {
        return $this->IE;
    }

    /**
     * Sets a new IE
     *
     * IE do emitente da NF de Produtor
     *
     * @param string $IE
     * @return self
     */
    public function setIE($IE)
    {
        $this->IE = $IE;
        return $this;
    }

    /**
     * Gets as mod
     *
     * Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor ou 01
     * para NF Avulsa
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
     * Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor ou 01
     * para NF Avulsa
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
     * Série do Documento Fiscal, informar zero se inexistentesérie
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
     * Série do Documento Fiscal, informar zero se inexistentesérie
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
     * Número do Documento Fiscal - 1 – 999999999
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
     * Número do Documento Fiscal - 1 – 999999999
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

