<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing TNfeProc
 *
 * Tipo da NF-e processada
 * XSD Type: TNfeProc
 */
class TNfeProc extends AbstractJsonSerializable
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * @property TNFe $nFe
     */
    protected $nFe = null;

    /**
     * @property TProtNFe $protNFe
     */
    protected $protNFe = null;

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as nFe
     *
     * @return TNFe
     */
    public function getNFe()
    {
        return $this->nFe;
    }

    /**
     * Sets a new nFe
     *
     * @param TNFe $nFe
     * @return self
     */
    public function setNFe(TNFe $nFe)
    {
        $this->nFe = $nFe;
        return $this;
    }

    /**
     * Gets as protNFe
     *
     * @return TProtNFe
     */
    public function getProtNFe()
    {
        return $this->protNFe;
    }

    /**
     * Sets a new protNFe
     *
     * @param TProtNFe $protNFe
     * @return self
     */
    public function setProtNFe(TProtNFe $protNFe)
    {
        $this->protNFe = $protNFe;
        return $this;
    }


}

