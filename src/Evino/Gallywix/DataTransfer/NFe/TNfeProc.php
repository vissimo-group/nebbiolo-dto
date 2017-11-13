<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TNfeProc
 *
 * Tipo da NF-e processada
 * XSD Type: TNfeProc
 */
class TNfeProc
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe $nFe
     */
    private $nFe = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\TProtNFe $protNFe
     */
    private $protNFe = null;

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
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe
     */
    public function getNFe()
    {
        return $this->nFe;
    }

    /**
     * Sets a new nFe
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe $nFe
     * @return self
     */
    public function setNFe(\Evino\Gallywix\DataTransfer\Nfe\TNFe $nFe)
    {
        $this->nFe = $nFe;
        return $this;
    }

    /**
     * Gets as protNFe
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TProtNFe
     */
    public function getProtNFe()
    {
        return $this->protNFe;
    }

    /**
     * Sets a new protNFe
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TProtNFe $protNFe
     * @return self
     */
    public function setProtNFe(\Evino\Gallywix\DataTransfer\Nfe\TProtNFe $protNFe)
    {
        $this->protNFe = $protNFe;
        return $this;
    }


}

