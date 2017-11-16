<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing DI
 */
class DI extends AbstractJsonSerializable
{

    /**
     * Numero do Documento de Importação DI/DSI/DA/DRI-E (DI/DSI/DA/DRI-E)
     * (NT2011/004)
     *
     * @property string $nDI
     */
    protected $nDI = null;

    /**
     * Data de registro da DI/DSI/DA (AAAA-MM-DD)
     *
     * @property string $dDI
     */
    protected $dDI = null;

    /**
     * Local do desembaraço aduaneiro
     *
     * @property string $xLocDesemb
     */
    protected $xLocDesemb = null;

    /**
     * UF onde ocorreu o desembaraço aduaneiro
     *
     * @property string $uFDesemb
     */
    protected $uFDesemb = null;

    /**
     * Data do desembaraço aduaneiro (AAAA-MM-DD)
     *
     * @property string $dDesemb
     */
    protected $dDesemb = null;

    /**
     * Via de transporte internacional informada na DI
     *  1-Maritima;2-Fluvial;3-Lacustre;4-Aerea;5-Postal;6-Ferroviaria;7-Rodoviaria;8-Conduto;9-Meios
     * Proprios;10-Entrada/Saida Ficta.
     *
     * @property string $tpViaTransp
     */
    protected $tpViaTransp = null;

    /**
     * Valor Adicional ao frete para renovação de marinha mercante
     *
     * @property string $vAFRMM
     */
    protected $vAFRMM = null;

    /**
     * Forma de Importação quanto a intermediação
     *  1-por conta propria;2-por conta e ordem;3-encomenda
     *
     * @property string $tpIntermedio
     */
    protected $tpIntermedio = null;

    /**
     * CNPJ do adquirente ou do encomendante
     *
     * @property string $cNPJ
     */
    protected $cNPJ = null;

    /**
     * Sigla da UF do adquirente ou do encomendante
     *
     * @property string $uFTerceiro
     */
    protected $uFTerceiro = null;

    /**
     * Código do exportador (usado nos sistemas internos de informação do emitente
     * da NF-e)
     *
     * @property string $cExportador
     */
    protected $cExportador = null;

    /**
     * Adições (NT 2011/004)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi[]
     * $adi
     */
    protected $adi = array(

    );

    /**
     * Gets as nDI
     *
     * Numero do Documento de Importação DI/DSI/DA/DRI-E (DI/DSI/DA/DRI-E)
     * (NT2011/004)
     *
     * @return string
     */
    public function getNDI()
    {
        return $this->nDI;
    }

    /**
     * Sets a new nDI
     *
     * Numero do Documento de Importação DI/DSI/DA/DRI-E (DI/DSI/DA/DRI-E)
     * (NT2011/004)
     *
     * @param string $nDI
     * @return self
     */
    public function setNDI($nDI)
    {
        $this->nDI = $nDI;
        return $this;
    }

    /**
     * Gets as dDI
     *
     * Data de registro da DI/DSI/DA (AAAA-MM-DD)
     *
     * @return string
     */
    public function getDDI()
    {
        return $this->dDI;
    }

    /**
     * Sets a new dDI
     *
     * Data de registro da DI/DSI/DA (AAAA-MM-DD)
     *
     * @param string $dDI
     * @return self
     */
    public function setDDI($dDI)
    {
        $this->dDI = $dDI;
        return $this;
    }

    /**
     * Gets as xLocDesemb
     *
     * Local do desembaraço aduaneiro
     *
     * @return string
     */
    public function getXLocDesemb()
    {
        return $this->xLocDesemb;
    }

    /**
     * Sets a new xLocDesemb
     *
     * Local do desembaraço aduaneiro
     *
     * @param string $xLocDesemb
     * @return self
     */
    public function setXLocDesemb($xLocDesemb)
    {
        $this->xLocDesemb = $xLocDesemb;
        return $this;
    }

    /**
     * Gets as uFDesemb
     *
     * UF onde ocorreu o desembaraço aduaneiro
     *
     * @return string
     */
    public function getUFDesemb()
    {
        return $this->uFDesemb;
    }

    /**
     * Sets a new uFDesemb
     *
     * UF onde ocorreu o desembaraço aduaneiro
     *
     * @param string $uFDesemb
     * @return self
     */
    public function setUFDesemb($uFDesemb)
    {
        $this->uFDesemb = $uFDesemb;
        return $this;
    }

    /**
     * Gets as dDesemb
     *
     * Data do desembaraço aduaneiro (AAAA-MM-DD)
     *
     * @return string
     */
    public function getDDesemb()
    {
        return $this->dDesemb;
    }

    /**
     * Sets a new dDesemb
     *
     * Data do desembaraço aduaneiro (AAAA-MM-DD)
     *
     * @param string $dDesemb
     * @return self
     */
    public function setDDesemb($dDesemb)
    {
        $this->dDesemb = $dDesemb;
        return $this;
    }

    /**
     * Gets as tpViaTransp
     *
     * Via de transporte internacional informada na DI
     *  1-Maritima;2-Fluvial;3-Lacustre;4-Aerea;5-Postal;6-Ferroviaria;7-Rodoviaria;8-Conduto;9-Meios
     * Proprios;10-Entrada/Saida Ficta.
     *
     * @return string
     */
    public function getTpViaTransp()
    {
        return $this->tpViaTransp;
    }

    /**
     * Sets a new tpViaTransp
     *
     * Via de transporte internacional informada na DI
     *  1-Maritima;2-Fluvial;3-Lacustre;4-Aerea;5-Postal;6-Ferroviaria;7-Rodoviaria;8-Conduto;9-Meios
     * Proprios;10-Entrada/Saida Ficta.
     *
     * @param string $tpViaTransp
     * @return self
     */
    public function setTpViaTransp($tpViaTransp)
    {
        $this->tpViaTransp = $tpViaTransp;
        return $this;
    }

    /**
     * Gets as vAFRMM
     *
     * Valor Adicional ao frete para renovação de marinha mercante
     *
     * @return string
     */
    public function getVAFRMM()
    {
        return $this->vAFRMM;
    }

    /**
     * Sets a new vAFRMM
     *
     * Valor Adicional ao frete para renovação de marinha mercante
     *
     * @param string $vAFRMM
     * @return self
     */
    public function setVAFRMM($vAFRMM)
    {
        $this->vAFRMM = $vAFRMM;
        return $this;
    }

    /**
     * Gets as tpIntermedio
     *
     * Forma de Importação quanto a intermediação
     *  1-por conta propria;2-por conta e ordem;3-encomenda
     *
     * @return string
     */
    public function getTpIntermedio()
    {
        return $this->tpIntermedio;
    }

    /**
     * Sets a new tpIntermedio
     *
     * Forma de Importação quanto a intermediação
     *  1-por conta propria;2-por conta e ordem;3-encomenda
     *
     * @param string $tpIntermedio
     * @return self
     */
    public function setTpIntermedio($tpIntermedio)
    {
        $this->tpIntermedio = $tpIntermedio;
        return $this;
    }

    /**
     * Gets as cNPJ
     *
     * CNPJ do adquirente ou do encomendante
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->cNPJ;
    }

    /**
     * Sets a new cNPJ
     *
     * CNPJ do adquirente ou do encomendante
     *
     * @param string $cNPJ
     * @return self
     */
    public function setCNPJ($cNPJ)
    {
        $this->cNPJ = $cNPJ;
        return $this;
    }

    /**
     * Gets as uFTerceiro
     *
     * Sigla da UF do adquirente ou do encomendante
     *
     * @return string
     */
    public function getUFTerceiro()
    {
        return $this->uFTerceiro;
    }

    /**
     * Sets a new uFTerceiro
     *
     * Sigla da UF do adquirente ou do encomendante
     *
     * @param string $uFTerceiro
     * @return self
     */
    public function setUFTerceiro($uFTerceiro)
    {
        $this->uFTerceiro = $uFTerceiro;
        return $this;
    }

    /**
     * Gets as cExportador
     *
     * Código do exportador (usado nos sistemas internos de informação do emitente
     * da NF-e)
     *
     * @return string
     */
    public function getCExportador()
    {
        return $this->cExportador;
    }

    /**
     * Sets a new cExportador
     *
     * Código do exportador (usado nos sistemas internos de informação do emitente
     * da NF-e)
     *
     * @param string $cExportador
     * @return self
     */
    public function setCExportador($cExportador)
    {
        $this->cExportador = $cExportador;
        return $this;
    }

	/**
	 * Adds as adi
	 *
	 * Adições (NT 2011/004)
	 *
	 *
	 * @param DI\Adi $adi
	 * @return DI
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi $adi* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi $adi
	 */
    public function addToAdi(DI\Adi $adi)
    {
        $this->adi[] = $adi;
        return $this;
    }

    /**
     * isset adi
     *
     * Adições (NT 2011/004)
     *
     * @param int $index
     * @return boolean
     */
    public function issetAdi($index)
    {
        return isset($this->adi[$index]);
    }

    /**
     * unset adi
     *
     * Adições (NT 2011/004)
     *
     * @param int $index
     * @return void
     */
    public function unsetAdi($index)
    {
        unset($this->adi[$index]);
    }

	/**
	 * Gets as adi
	 *
	 * Adições (NT 2011/004)
	 * @return array \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi[]
	 * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi[]
	 */
    public function getAdi()
    {
        return $this->adi;
    }

	/**
	 * Sets a new adi
	 *
	 * Adições (NT 2011/004)
	 *
	 * @param array $adi
	 * @return DI
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi[]* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi[]
	 * $adi
	 */
    public function setAdi(array $adi)
    {
        $this->adi = $adi;
        return $this;
    }


}

