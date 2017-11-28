<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Nfe\TEndereco;

/**
 * Class representing Dest
 */
class Dest extends BaseGallywixDataTransfer
{

    /**
     * Número do CNPJ
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * Número do CPF
     *
     * @property string $CPF
     */
    protected $CPF = null;

    /**
     * Identificador do destinatário, em caso de comprador estrangeiro
     *
     * @property string $idEstrangeiro
     */
    protected $idEstrangeiro = null;

    /**
     * Razão Social ou nome do destinatário
     *
     * @property string $xNome
     */
    protected $xNome = null;

    /**
     * Dados do endereço
     *
     * @property TEndereco $enderDest
     */
    protected $enderDest = null;

    /**
     * Indicador da IE do destinatário:
     * 1 – Contribuinte ICMSpagamento à vista;
     * 2 – Contribuinte isento de inscrição;
     * 9 – Não Contribuinte
     *
     * @property string $indIEDest
     */
    protected $indIEDest = null;

    /**
     * Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS)
     *
     * @property string $IE
     */
    protected $IE = null;

    /**
     * Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com
     * benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 -
     * alterado para aceitar 8 ou 9 dígitos
     *
     * @property string $ISUF
     */
    protected $ISUF = null;

    /**
     * Inscrição Municipal do tomador do serviço
     *
     * @property string $IM
     */
    protected $IM = null;

    /**
     * Informar o e-mail do destinatário. O campo pode ser utilizado para informar o
     * e-mail
     * de recepção da NF-e indicada pelo destinatário
     *
     * @property string $email
     */
    protected $email = null;

    /**
     * Gets as CNPJ
     *
     * Número do CNPJ
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Sets a new CNPJ
     *
     * Número do CNPJ
     *
     * @param string $CNPJ
     * @return self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    /**
     * Gets as CPF
     *
     * Número do CPF
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Sets a new CPF
     *
     * Número do CPF
     *
     * @param string $CPF
     * @return self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
        return $this;
    }

    /**
     * Gets as idEstrangeiro
     *
     * Identificador do destinatário, em caso de comprador estrangeiro
     *
     * @return string
     */
    public function getIdEstrangeiro()
    {
        return $this->idEstrangeiro;
    }

    /**
     * Sets a new idEstrangeiro
     *
     * Identificador do destinatário, em caso de comprador estrangeiro
     *
     * @param string $idEstrangeiro
     * @return self
     */
    public function setIdEstrangeiro($idEstrangeiro)
    {
        $this->idEstrangeiro = $idEstrangeiro;
        return $this;
    }

    /**
     * Gets as xNome
     *
     * Razão Social ou nome do destinatário
     *
     * @return string
     */
    public function getXNome()
    {
        return $this->xNome;
    }

    /**
     * Sets a new xNome
     *
     * Razão Social ou nome do destinatário
     *
     * @param string $xNome
     * @return self
     */
    public function setXNome($xNome)
    {
        $this->xNome = $xNome;
        return $this;
    }

    /**
     * Gets as enderDest
     *
     * Dados do endereço
     *
     * @return TEndereco
     */
    public function getEnderDest()
    {
        return $this->enderDest;
    }

    /**
     * Sets a new enderDest
     *
     * Dados do endereço
     *
     * @param TEndereco $enderDest
     * @return self
     */
    public function setEnderDest(TEndereco $enderDest)
    {
        $this->enderDest = $enderDest;
        return $this;
    }

    /**
     * Gets as indIEDest
     *
     * Indicador da IE do destinatário:
     * 1 – Contribuinte ICMSpagamento à vista;
     * 2 – Contribuinte isento de inscrição;
     * 9 – Não Contribuinte
     *
     * @return string
     */
    public function getIndIEDest()
    {
        return $this->indIEDest;
    }

    /**
     * Sets a new indIEDest
     *
     * Indicador da IE do destinatário:
     * 1 – Contribuinte ICMSpagamento à vista;
     * 2 – Contribuinte isento de inscrição;
     * 9 – Não Contribuinte
     *
     * @param string $indIEDest
     * @return self
     */
    public function setIndIEDest($indIEDest)
    {
        $this->indIEDest = $indIEDest;
        return $this;
    }

    /**
     * Gets as IE
     *
     * Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS)
     *
     * @return string
     */
    public function getIE()
    {
        return $this->IE;
    }

    /**
     * Sets a new IE
     *
     * Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS)
     *
     * @param string $IE
     * @return self
     */
    public function setIE($IE)
    {
        $this->IE = $IE;
        return $this;
    }

    /**
     * Gets as iSUF
     *
     * Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com
     * benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 -
     * alterado para aceitar 8 ou 9 dígitos
     *
     * @return string
     */
    public function getISUF()
    {
        return $this->ISUF;
    }

    /**
     * Sets a new iSUF
     *
     * Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com
     * benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 -
     * alterado para aceitar 8 ou 9 dígitos
     *
     * @param string $ISUF
     * @return self
     */
    public function setISUF($ISUF)
    {
        $this->ISUF = $ISUF;
        return $this;
    }

    /**
     * Gets as IM
     *
     * Inscrição Municipal do tomador do serviço
     *
     * @return string
     */
    public function getIM()
    {
        return $this->IM;
    }

    /**
     * Sets a new IM
     *
     * Inscrição Municipal do tomador do serviço
     *
     * @param string $IM
     * @return self
     */
    public function setIM($IM)
    {
        $this->IM = $IM;
        return $this;
    }

    /**
     * Gets as email
     *
     * Informar o e-mail do destinatário. O campo pode ser utilizado para informar o
     * e-mail
     * de recepção da NF-e indicada pelo destinatário
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Informar o e-mail do destinatário. O campo pode ser utilizado para informar o
     * e-mail
     * de recepção da NF-e indicada pelo destinatário
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}

