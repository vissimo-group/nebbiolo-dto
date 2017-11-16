<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;
use Evino\Gallywix\DataTransfer\Nfe\TLocal;

/**
 * Class representing InfNFe
 */
class InfNFe extends AbstractJsonSerializable
{

    /**
     * Versão do leiaute (v4.00)
     *
     * @property string $versao
     */
    protected $versao = null;

    /**
     * PL_005d - 11/08/09 - validação do Id
     *
     * @property string $id
     */
    protected $id = null;

    /**
     * identificação da NF-e
     *
     * @property InfNFe\Ide $ide
     */
    protected $ide = null;

    /**
     * Identificação do emitente
     *
     * @property InfNFe\Emit $emit
     */
    protected $emit = null;

    /**
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @property InfNFe\Avulsa $avulsa
     */
    protected $avulsa = null;

    /**
     * Identificação do Destinatário
     *
     * @property InfNFe\Dest $dest
     */
    protected $dest = null;

    /**
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @property TLocal $retirada
     */
    protected $retirada = null;

    /**
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @property TLocal $entrega
     */
    protected $entrega = null;

    /**
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @property InfNFe\AutXML[] $autXML
     */
    protected $autXML = array(

    );

    /**
     * Dados dos detalhes da NF-e
     *
     * @property InfNFe\Det[] $det
     */
    protected $det = array(

    );

    /**
     * Dados dos totais da NF-e
     *
     * @property InfNFe\Total $total
     */
    protected $total = null;

    /**
     * Dados dos transportes da NF-e
     *
     * @property InfNFe\Transp $transp
     */
    protected $transp = null;

    /**
     * Dados da cobrança da NF-e
     *
     * @property InfNFe\Cobr $cobr
     */
    protected $cobr = null;

    /**
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @property InfNFe\Pag $pag
     */
    protected $pag = null;

    /**
     * Informações adicionais da NF-e
     *
     * @property InfNFe\InfAdic $infAdic
     */
    protected $infAdic = null;

    /**
     * Informações de exportação
     *
     * @property InfNFe\Exporta $exporta
     */
    protected $exporta = null;

    /**
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @property InfNFe\Compra $compra
     */
    protected $compra = null;

    /**
     * Informações de registro aquisições de cana
     *
     * @property InfNFe\Cana $cana
     */
    protected $cana = null;

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
     * @return InfNFe\Ide
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
     * @param InfNFe\Ide $ide
     * @return self
     */
    public function setIde(InfNFe\Ide $ide)
    {
        $this->ide = $ide;
        return $this;
    }

    /**
     * Gets as emit
     *
     * Identificação do emitente
     *
     * @return InfNFe\Emit
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
     * @param InfNFe\Emit $emit
     * @return self
     */
    public function setEmit(InfNFe\Emit $emit)
    {
        $this->emit = $emit;
        return $this;
    }

    /**
     * Gets as avulsa
     *
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @return InfNFe\Avulsa
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
     * @param InfNFe\Avulsa $avulsa
     * @return self
     */
    public function setAvulsa(InfNFe\Avulsa $avulsa)
    {
        $this->avulsa = $avulsa;
        return $this;
    }

    /**
     * Gets as dest
     *
     * Identificação do Destinatário
     *
     * @return InfNFe\Dest
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
     * @param InfNFe\Dest $dest
     * @return self
     */
    public function setDest(InfNFe\Dest $dest)
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
     * @return TLocal
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
     * @param TLocal $retirada
     * @return self
     */
    public function setRetirada(TLocal $retirada)
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
     * @return TLocal
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
     * @param TLocal $entrega
     * @return self
     */
    public function setEntrega(TLocal $entrega)
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
     * @param InfNFe\AutXML $autXML
     */
    public function addToAutXML(InfNFe\AutXML $autXML)
    {
        $this->autXML[] = $autXML;
        return $this;
    }

    /**
     * isset autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param int $index
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
     * @param int $index
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
     * @return InfNFe\AutXML[]
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
     * @param InfNFe\AutXML[] $autXML
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
     * @param InfNFe\Det $det
     */
    public function addToDet(InfNFe\Det $det)
    {
        $this->det[] = $det;
        return $this;
    }

    /**
     * isset det
     *
     * Dados dos detalhes da NF-e
     *
     * @param int $index
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
     * @param int $index
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
     * @return InfNFe\Det[]
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
     * @param InfNFe\Det[] $det
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
     * @return InfNFe\Total
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
     * @param InfNFe\Total $total
     * @return self
     */
    public function setTotal(InfNFe\Total $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as transp
     *
     * Dados dos transportes da NF-e
     *
     * @return InfNFe\Transp
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
     * @param InfNFe\Transp $transp
     * @return self
     */
    public function setTransp(InfNFe\Transp $transp)
    {
        $this->transp = $transp;
        return $this;
    }

    /**
     * Gets as cobr
     *
     * Dados da cobrança da NF-e
     *
     * @return InfNFe\Cobr
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
     * @param InfNFe\Cobr $cobr
     * @return self
     */
    public function setCobr(InfNFe\Cobr $cobr)
    {
        $this->cobr = $cobr;
        return $this;
    }

    /**
     * Gets as pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @return InfNFe\Pag
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
     * @param InfNFe\Pag $pag
     * @return self
     */
    public function setPag(InfNFe\Pag $pag)
    {
        $this->pag = $pag;
        return $this;
    }

    /**
     * Gets as infAdic
     *
     * Informações adicionais da NF-e
     *
     * @return InfNFe\InfAdic
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
     * @param InfNFe\InfAdic $infAdic
     * @return self
     */
    public function setInfAdic(InfNFe\InfAdic $infAdic)
    {
        $this->infAdic = $infAdic;
        return $this;
    }

    /**
     * Gets as exporta
     *
     * Informações de exportação
     *
     * @return InfNFe\Exporta
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
     * @param InfNFe\Exporta $exporta
     * @return self
     */
    public function setExporta(InfNFe\Exporta $exporta)
    {
        $this->exporta = $exporta;
        return $this;
    }

    /**
     * Gets as compra
     *
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @return InfNFe\Compra
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
     * @param InfNFe\Compra $compra
     * @return self
     */
    public function setCompra(InfNFe\Compra $compra)
    {
        $this->compra = $compra;
        return $this;
    }

    /**
     * Gets as cana
     *
     * Informações de registro aquisições de cana
     *
     * @return InfNFe\Cana
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
     * @param InfNFe\Cana $cana
     * @return self
     */
    public function setCana(InfNFe\Cana $cana)
    {
        $this->cana = $cana;
        return $this;
    }


}

