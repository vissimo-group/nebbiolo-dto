<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing NFref
 */
class NFref extends AbstractJsonSerializable
{

    /**
     * Chave de acesso das NF-e referenciadas. Chave de acesso compostas por Código da
     * UF (tabela do IBGE) + AAMM da emissão + CNPJ do Emitente + modelo, série e
     * número da NF-e Referenciada + Código Numérico + DV.
     *
     * @property string $refNFe
     */
    protected $refNFe = null;

    /**
     * Dados da NF modelo 1/1A referenciada ou NF modelo 2 referenciada
     *
     * @property NFref\RefNF
     * $refNF
     */
    protected $refNF = null;

    /**
     * Grupo com as informações NF de produtor referenciada
     *
     * @property NFref\RefNFP
     * $refNFP
     */
    protected $refNFP = null;

    /**
     * Utilizar esta TAG para referenciar um CT-e emitido anteriormente, vinculada a
     * NF-e atual
     *
     * @property string $refCTe
     */
    protected $refCTe = null;

    /**
     * Grupo do Cupom Fiscal vinculado à NF-e
     *
     * @property NFref\RefECF
     * $refECF
     */
    protected $refECF = null;

    /**
     * Gets as refNFe
     *
     * Chave de acesso das NF-e referenciadas. Chave de acesso compostas por Código da
     * UF (tabela do IBGE) + AAMM da emissão + CNPJ do Emitente + modelo, série e
     * número da NF-e Referenciada + Código Numérico + DV.
     *
     * @return string
     */
    public function getRefNFe()
    {
        return $this->refNFe;
    }

    /**
     * Sets a new refNFe
     *
     * Chave de acesso das NF-e referenciadas. Chave de acesso compostas por Código da
     * UF (tabela do IBGE) + AAMM da emissão + CNPJ do Emitente + modelo, série e
     * número da NF-e Referenciada + Código Numérico + DV.
     *
     * @param string $refNFe
     * @return self
     */
    public function setRefNFe($refNFe)
    {
        $this->refNFe = $refNFe;
        return $this;
    }

    /**
     * Gets as refNF
     *
     * Dados da NF modelo 1/1A referenciada ou NF modelo 2 referenciada
     *
     * @return NFref\RefNF
     */
    public function getRefNF()
    {
        return $this->refNF;
    }

    /**
     * Sets a new refNF
     *
     * Dados da NF modelo 1/1A referenciada ou NF modelo 2 referenciada
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefNF
     * $refNF
     * @return self
     */
    public function setRefNF(NFref\RefNF $refNF)
    {
        $this->refNF = $refNF;
        return $this;
    }

    /**
     * Gets as refNFP
     *
     * Grupo com as informações NF de produtor referenciada
     *
     * @return NFref\RefNFP
     */
    public function getRefNFP()
    {
        return $this->refNFP;
    }

    /**
     * Sets a new refNFP
     *
     * Grupo com as informações NF de produtor referenciada
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefNFP
     * $refNFP
     * @return self
     */
    public function setRefNFP(NFref\RefNFP $refNFP)
    {
        $this->refNFP = $refNFP;
        return $this;
    }

    /**
     * Gets as refCTe
     *
     * Utilizar esta TAG para referenciar um CT-e emitido anteriormente, vinculada a
     * NF-e atual
     *
     * @return string
     */
    public function getRefCTe()
    {
        return $this->refCTe;
    }

    /**
     * Sets a new refCTe
     *
     * Utilizar esta TAG para referenciar um CT-e emitido anteriormente, vinculada a
     * NF-e atual
     *
     * @param string $refCTe
     * @return self
     */
    public function setRefCTe($refCTe)
    {
        $this->refCTe = $refCTe;
        return $this;
    }

    /**
     * Gets as refECF
     *
     * Grupo do Cupom Fiscal vinculado à NF-e
     *
     * @return NFref\RefECF
     */
    public function getRefECF()
    {
        return $this->refECF;
    }

    /**
     * Sets a new refECF
     *
     * Grupo do Cupom Fiscal vinculado à NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref\RefECF
     * $refECF
     * @return self
     */
    public function setRefECF(NFref\RefECF $refECF)
    {
        $this->refECF = $refECF;
        return $this;
    }


}

