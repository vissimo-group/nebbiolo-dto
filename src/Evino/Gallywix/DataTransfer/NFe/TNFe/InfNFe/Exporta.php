<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing Exporta
 */
class Exporta extends AbstractJsonSerializable
{

    /**
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @property string $uFSaidaPais
     */
    protected $uFSaidaPais = null;

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
     * Gets as uFSaidaPais
     *
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @return string
     */
    public function getUFSaidaPais()
    {
        return $this->uFSaidaPais;
    }

    /**
     * Sets a new uFSaidaPais
     *
     * Sigla da UF de Embarque ou de transposição de fronteira
     *
     * @param string $uFSaidaPais
     * @return self
     */
    public function setUFSaidaPais($uFSaidaPais)
    {
        $this->uFSaidaPais = $uFSaidaPais;
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

