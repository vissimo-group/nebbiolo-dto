<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Exporta
 */
class Exporta extends BaseDataTransfer
{

    /**
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @property string $UFSaidaPais
     */
    protected $UFSaidaPais = null;

    /**
     * Local de Embarque ou de transposição de fronteira
     *
     * @property string $xLocExporta
     */
    protected $xLocExporta = null;

    /**
     * Descrição do local de despacho
     *
     * @property string $xLocDespacho
     */
    protected $xLocDespacho = null;

    /**
     * Gets as UFSaidaPais
     *
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @return string
     */
    public function getUFSaidaPais()
    {
        return $this->UFSaidaPais;
    }

    /**
     * Sets a new UFSaidaPais
     *
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @param string $UFSaidaPais
     * @return self
     */
    public function setUFSaidaPais($UFSaidaPais)
    {
        $this->UFSaidaPais = $UFSaidaPais;
        return $this;
    }

    /**
     * Gets as xLocExporta
     *
     * Local de Embarque ou de transposição de fronteira
     *
     * @return string
     */
    public function getXLocExporta()
    {
        return $this->xLocExporta;
    }

    /**
     * Sets a new xLocExporta
     *
     * Local de Embarque ou de transposição de fronteira
     *
     * @param string $xLocExporta
     * @return self
     */
    public function setXLocExporta($xLocExporta)
    {
        $this->xLocExporta = $xLocExporta;
        return $this;
    }

    /**
     * Gets as xLocDespacho
     *
     * Descrição do local de despacho
     *
     * @return string
     */
    public function getXLocDespacho()
    {
        return $this->xLocDespacho;
    }

    /**
     * Sets a new xLocDespacho
     *
     * Descrição do local de despacho
     *
     * @param string $xLocDespacho
     * @return self
     */
    public function setXLocDespacho($xLocDespacho)
    {
        $this->xLocDespacho = $xLocDespacho;
        return $this;
    }

}
