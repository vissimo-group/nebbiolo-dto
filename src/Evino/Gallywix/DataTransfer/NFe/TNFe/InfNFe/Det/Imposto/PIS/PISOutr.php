<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing PISOutr
 */
class PISOutr extends BaseGallywixDataTransfer
{

    /**
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Valor da BC do PIS
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Alíquota do PIS (em percentual)
     *
     * @property string $pPIS
     */
    protected $pPIS = null;

    /**
     * Quantidade Vendida (NT2011/004)
     *
     * @property string $qBCProd
     */
    protected $qBCProd = null;

    /**
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @property string $vAliqProd
     */
    protected $vAliqProd = null;

    /**
     * Valor do PIS
     *
     * @property string $vPIS
     */
    protected $vPIS = null;

    /**
     * Gets as CST
     *
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
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
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
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
     * Valor da BC do PIS
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
     * Valor da BC do PIS
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
     * Gets as pPIS
     *
     * Alíquota do PIS (em percentual)
     *
     * @return string
     */
    public function getPPIS()
    {
        return $this->pPIS;
    }

    /**
     * Sets a new pPIS
     *
     * Alíquota do PIS (em percentual)
     *
     * @param string $pPIS
     * @return self
     */
    public function setPPIS($pPIS)
    {
        $this->pPIS = $pPIS;
        return $this;
    }

    /**
     * Gets as qBCProd
     *
     * Quantidade Vendida (NT2011/004)
     *
     * @return string
     */
    public function getQBCProd()
    {
        return $this->qBCProd;
    }

    /**
     * Sets a new qBCProd
     *
     * Quantidade Vendida (NT2011/004)
     *
     * @param string $qBCProd
     * @return self
     */
    public function setQBCProd($qBCProd)
    {
        $this->qBCProd = $qBCProd;
        return $this;
    }

    /**
     * Gets as vAliqProd
     *
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @return string
     */
    public function getVAliqProd()
    {
        return $this->vAliqProd;
    }

    /**
     * Sets a new vAliqProd
     *
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @param string $vAliqProd
     * @return self
     */
    public function setVAliqProd($vAliqProd)
    {
        $this->vAliqProd = $vAliqProd;
        return $this;
    }

    /**
     * Gets as vPIS
     *
     * Valor do PIS
     *
     * @return string
     */
    public function getVPIS()
    {
        return $this->vPIS;
    }

    /**
     * Sets a new vPIS
     *
     * Valor do PIS
     *
     * @param string $vPIS
     * @return self
     */
    public function setVPIS($vPIS)
    {
        $this->vPIS = $vPIS;
        return $this;
    }


}

