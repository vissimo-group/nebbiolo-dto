<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TEnviNFeType
 *
 * Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * XSD Type: TEnviNFe
 */
class TEnviNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property string $idLote
     */
    private $idLote = null;

    /**
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @property string $indSinc
     */
    private $indSinc = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType[] $nFe
     */
    private $nFe = array(

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
     * Adds as nFe
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType $nFe
     */
    public function addToNFe(\Evino\Gallywix\DataTransfer\Nfe\TNFeType $nFe)
    {
        $this->nFe[] = $nFe;
        return $this;
    }

    /**
     * isset nFe
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNFe($index)
    {
        return isset($this->nFe[$index]);
    }

    /**
     * unset nFe
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNFe($index)
    {
        unset($this->nFe[$index]);
    }

    /**
     * Gets as nFe
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType[]
     */
    public function getNFe()
    {
        return $this->nFe;
    }

    /**
     * Sets a new nFe
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType[] $nFe
     * @return self
     */
    public function setNFe(array $nFe)
    {
        $this->nFe = $nFe;
        return $this;
    }


}

