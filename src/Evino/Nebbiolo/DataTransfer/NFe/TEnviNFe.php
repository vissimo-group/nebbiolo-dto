<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TEnviNFe
 *
 * Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * XSD Type: TEnviNFe
 */
class TEnviNFe extends BaseDataTransfer
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * @property string $idLote
     */
    protected $idLote = null;

    /**
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @property string $indSinc
     */
    protected $indSinc = null;

    /**
     * @property TNFe[] $NFe
     */
    protected $NFe = array(

    );

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
     * Gets as idLote
     *
     * @return string
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Sets a new idLote
     *
     * @param string $idLote
     * @return self
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;
        return $this;
    }

    /**
     * Gets as indSinc
     *
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @return string
     */
    public function getIndSinc()
    {
        return $this->indSinc;
    }

    /**
     * Sets a new indSinc
     *
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @param string $indSinc
     * @return self
     */
    public function setIndSinc($indSinc)
    {
        $this->indSinc = $indSinc;
        return $this;
    }

    /**
     * Adds as NFe
     *
     * @return self
     * @param TNFe $NFe
     */
    public function addToNFe(TNFe $NFe)
    {
        $this->NFe[] = $NFe;
        return $this;
    }

    /**
     * isset NFe
     *
     * @param int $index
     * @return boolean
     */
    public function issetNFe($index)
    {
        return isset($this->NFe[$index]);
    }

    /**
     * unset NFe
     *
     * @param int $index
     * @return void
     */
    public function unsetNFe($index)
    {
        unset($this->NFe[$index]);
    }

    /**
     * Gets as NFe
     *
     * @return TNFe[]
     */
    public function getNFe()
    {
        return $this->NFe;
    }

    /**
     * Sets a new NFe
     *
     * @param TNFe[] $NFe
     * @return self
     */
    public function setNFe(array $NFe)
    {
        $this->NFe = $NFe;
        return $this;
    }


}

