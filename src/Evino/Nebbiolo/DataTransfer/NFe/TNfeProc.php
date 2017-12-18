<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TNfeProc
 *
 * Tipo da NF-e processada
 * XSD Type: TNfeProc
 */
class TNfeProc extends BaseDataTransfer
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * @property TNFe $NFe
     */
    protected $NFe = null;

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
     * Gets as NFe
     *
     * @return TNFe
     */
    public function getNFe()
    {
        return $this->NFe;
    }

    /**
     * Sets a new NFe
     *
     * @param TNFe $NFe
     * @return self
     */
    public function setNFe(TNFe $NFe)
    {
        $this->NFe = $NFe;
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

