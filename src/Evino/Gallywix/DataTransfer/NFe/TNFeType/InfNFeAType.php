<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType;

/**
 * Class representing InfNFeAType
 */
class InfNFeAType
{

    /**
     * Versão do leiaute (v4.00)
     *
     * @property string $versao
     */
    private $versao = null;

    /**
     * PL_005d - 11/08/09 - validação do Id
     *
     * @property string $id
     */
    private $id = null;

    /**
     * identificação da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\IdeAType $ide
     */
    private $ide = null;

    /**
     * Identificação do emitente
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\EmitAType $emit
     */
    private $emit = null;

    /**
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AvulsaAType $avulsa
     */
    private $avulsa = null;

    /**
     * Identificação do Destinatário
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DestAType $dest
     */
    private $dest = null;

    /**
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TLocalType $retirada
     */
    private $retirada = null;

    /**
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TLocalType $entrega
     */
    private $entrega = null;

    /**
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AutXMLAType[] $autXML
     */
    private $autXML = array(

    );

    /**
     * Dados dos detalhes da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType[] $det
     */
    private $det = array(

    );

    /**
     * Dados dos totais da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType $total
     */
    private $total = null;

    /**
     * Dados dos transportes da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType $transp
     */
    private $transp = null;

    /**
     * Dados da cobrança da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CobrAType $cobr
     */
    private $cobr = null;

    /**
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\PagAType $pag
     */
    private $pag = null;

    /**
     * Informações adicionais da NF-e
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\InfAdicAType $infAdic
     */
    private $infAdic = null;

    /**
     * Informações de exportação
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\ExportaAType $exporta
     */
    private $exporta = null;

    /**
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CompraAType $compra
     */
    private $compra = null;

    /**
     * Informações de registro aquisições de cana
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CanaAType $cana
     */
    private $cana = null;

    /**
     * Gets as versao
     *
     * Versão do leiaute (v4.00)
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
     * Versão do leiaute (v4.00)
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
     * Gets as id
     *
     * PL_005d - 11/08/09 - validação do Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * PL_005d - 11/08/09 - validação do Id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ide
     *
     * identificação da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\IdeAType
     */
    public function getIde()
    {
        return $this->ide;
    }

    /**
     * Sets a new ide
     *
     * identificação da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\IdeAType $ide
     * @return self
     */
    public function setIde(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\IdeAType $ide)
    {
        $this->ide = $ide;
        return $this;
    }

    /**
     * Gets as emit
     *
     * Identificação do emitente
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\EmitAType
     */
    public function getEmit()
    {
        return $this->emit;
    }

    /**
     * Sets a new emit
     *
     * Identificação do emitente
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\EmitAType $emit
     * @return self
     */
    public function setEmit(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\EmitAType $emit)
    {
        $this->emit = $emit;
        return $this;
    }

    /**
     * Gets as avulsa
     *
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AvulsaAType
     */
    public function getAvulsa()
    {
        return $this->avulsa;
    }

    /**
     * Sets a new avulsa
     *
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AvulsaAType $avulsa
     * @return self
     */
    public function setAvulsa(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AvulsaAType $avulsa)
    {
        $this->avulsa = $avulsa;
        return $this;
    }

    /**
     * Gets as dest
     *
     * Identificação do Destinatário
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DestAType
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Sets a new dest
     *
     * Identificação do Destinatário
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DestAType $dest
     * @return self
     */
    public function setDest(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DestAType $dest)
    {
        $this->dest = $dest;
        return $this;
    }

    /**
     * Gets as retirada
     *
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TLocalType
     */
    public function getRetirada()
    {
        return $this->retirada;
    }

    /**
     * Sets a new retirada
     *
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TLocalType $retirada
     * @return self
     */
    public function setRetirada(\Evino\Gallywix\DataTransfer\Nfe\TLocalType $retirada)
    {
        $this->retirada = $retirada;
        return $this;
    }

    /**
     * Gets as entrega
     *
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TLocalType
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * Sets a new entrega
     *
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TLocalType $entrega
     * @return self
     */
    public function setEntrega(\Evino\Gallywix\DataTransfer\Nfe\TLocalType $entrega)
    {
        $this->entrega = $entrega;
        return $this;
    }

    /**
     * Adds as autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AutXMLAType $autXML
     */
    public function addToAutXML(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AutXMLAType $autXML)
    {
        $this->autXML[] = $autXML;
        return $this;
    }

    /**
     * isset autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAutXML($index)
    {
        return isset($this->autXML[$index]);
    }

    /**
     * unset autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAutXML($index)
    {
        unset($this->autXML[$index]);
    }

    /**
     * Gets as autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AutXMLAType[]
     */
    public function getAutXML()
    {
        return $this->autXML;
    }

    /**
     * Sets a new autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\AutXMLAType[] $autXML
     * @return self
     */
    public function setAutXML(array $autXML)
    {
        $this->autXML = $autXML;
        return $this;
    }

    /**
     * Adds as det
     *
     * Dados dos detalhes da NF-e
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType $det
     */
    public function addToDet(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType $det)
    {
        $this->det[] = $det;
        return $this;
    }

    /**
     * isset det
     *
     * Dados dos detalhes da NF-e
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDet($index)
    {
        return isset($this->det[$index]);
    }

    /**
     * unset det
     *
     * Dados dos detalhes da NF-e
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDet($index)
    {
        unset($this->det[$index]);
    }

    /**
     * Gets as det
     *
     * Dados dos detalhes da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType[]
     */
    public function getDet()
    {
        return $this->det;
    }

    /**
     * Sets a new det
     *
     * Dados dos detalhes da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType[] $det
     * @return self
     */
    public function setDet(array $det)
    {
        $this->det = $det;
        return $this;
    }

    /**
     * Gets as total
     *
     * Dados dos totais da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Dados dos totais da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as transp
     *
     * Dados dos transportes da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType
     */
    public function getTransp()
    {
        return $this->transp;
    }

    /**
     * Sets a new transp
     *
     * Dados dos transportes da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType $transp
     * @return self
     */
    public function setTransp(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType $transp)
    {
        $this->transp = $transp;
        return $this;
    }

    /**
     * Gets as cobr
     *
     * Dados da cobrança da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CobrAType
     */
    public function getCobr()
    {
        return $this->cobr;
    }

    /**
     * Sets a new cobr
     *
     * Dados da cobrança da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CobrAType $cobr
     * @return self
     */
    public function setCobr(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CobrAType $cobr)
    {
        $this->cobr = $cobr;
        return $this;
    }

    /**
     * Gets as pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\PagAType
     */
    public function getPag()
    {
        return $this->pag;
    }

    /**
     * Sets a new pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\PagAType $pag
     * @return self
     */
    public function setPag(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\PagAType $pag)
    {
        $this->pag = $pag;
        return $this;
    }

    /**
     * Gets as infAdic
     *
     * Informações adicionais da NF-e
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\InfAdicAType
     */
    public function getInfAdic()
    {
        return $this->infAdic;
    }

    /**
     * Sets a new infAdic
     *
     * Informações adicionais da NF-e
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\InfAdicAType $infAdic
     * @return self
     */
    public function setInfAdic(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\InfAdicAType $infAdic)
    {
        $this->infAdic = $infAdic;
        return $this;
    }

    /**
     * Gets as exporta
     *
     * Informações de exportação
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\ExportaAType
     */
    public function getExporta()
    {
        return $this->exporta;
    }

    /**
     * Sets a new exporta
     *
     * Informações de exportação
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\ExportaAType $exporta
     * @return self
     */
    public function setExporta(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\ExportaAType $exporta)
    {
        $this->exporta = $exporta;
        return $this;
    }

    /**
     * Gets as compra
     *
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CompraAType
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Sets a new compra
     *
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CompraAType $compra
     * @return self
     */
    public function setCompra(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CompraAType $compra)
    {
        $this->compra = $compra;
        return $this;
    }

    /**
     * Gets as cana
     *
     * Informações de registro aquisições de cana
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CanaAType
     */
    public function getCana()
    {
        return $this->cana;
    }

    /**
     * Sets a new cana
     *
     * Informações de registro aquisições de cana
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CanaAType $cana
     * @return self
     */
    public function setCana(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\CanaAType $cana)
    {
        $this->cana = $cana;
        return $this;
    }


}

