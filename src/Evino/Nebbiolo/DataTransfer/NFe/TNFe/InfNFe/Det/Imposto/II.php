<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing II
 */
class II extends BaseDataTransfer
{

    /**
     * Base da BC do Imposto de Importação
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Valor das despesas aduaneiras
     *
     * @property string $vDespAdu
     */
    protected $vDespAdu = null;

    /**
     * Valor do Imposto de Importação
     *
     * @property string $vII
     */
    protected $vII = null;

    /**
     * Valor do Imposto sobre Operações Financeiras
     *
     * @property string $vIOF
     */
    protected $vIOF = null;

    /**
     * Gets as vBC
     *
     * Base da BC do Imposto de Importação
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
     * Base da BC do Imposto de Importação
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
     * Gets as vDespAdu
     *
     * Valor das despesas aduaneiras
     *
     * @return string
     */
    public function getVDespAdu()
    {
        return $this->vDespAdu;
    }

    /**
     * Sets a new vDespAdu
     *
     * Valor das despesas aduaneiras
     *
     * @param string $vDespAdu
     * @return self
     */
    public function setVDespAdu($vDespAdu)
    {
        $this->vDespAdu = $vDespAdu;
        return $this;
    }

    /**
     * Gets as vII
     *
     * Valor do Imposto de Importação
     *
     * @return string
     */
    public function getVII()
    {
        return $this->vII;
    }

    /**
     * Sets a new vII
     *
     * Valor do Imposto de Importação
     *
     * @param string $vII
     * @return self
     */
    public function setVII($vII)
    {
        $this->vII = $vII;
        return $this;
    }

    /**
     * Gets as vIOF
     *
     * Valor do Imposto sobre Operações Financeiras
     *
     * @return string
     */
    public function getVIOF()
    {
        return $this->vIOF;
    }

    /**
     * Sets a new vIOF
     *
     * Valor do Imposto sobre Operações Financeiras
     *
     * @param string $vIOF
     * @return self
     */
    public function setVIOF($vIOF)
    {
        $this->vIOF = $vIOF;
        return $this;
    }

}
