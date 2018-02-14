<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TRetEnviNFe
 *
 * Tipo Retorno do Pedido de Autorização da Nota Fiscal Eletrônica
 * XSD Type: TRetEnviNFe
 */
class TRetEnviNFe extends BaseDataTransfer
{
    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * Identificação do Ambiente:
     * 1 => Produção
     * 2 => Homologação
     *
     * @property string $tpAmb
     */
    protected $tpAmb = null;

    /**
     * Versão do Aplicativo que recebeu o Lote.
     *
     * @property string $verAplic
     */
    protected $verAplic = null;

    /**
     * Código do status da mensagem enviada.
     *
     * @property string $cStat
     */
    protected $cStat = null;

    /**
     * Descrição literal do status do serviço solicitado.
     *
     * @property string $xMotivo
     */
    protected $xMotivo = null;

    /**
     * Código da UF de atendimento
     *
     * @property string $cUF
     */
    protected $cUF = null;

    /**
     * Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SSTZD
     *
     * @property string $dhRecbto
     */
    protected $dhRecbto = null;

    /**
     * Dados do Recibo do Lote
     *
     * @property TRetEnviNFe\InfRec $infRec
     */
    protected $infRec = null;

    /**
     * Protocolo de status resultado do processamento sincrono da NFC-e
     *
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
     * Gets as tpAmb
     *
     * Identificação do Ambiente:
     * 1 => Produção
     * 2 => Homologação
     *
     * @return string
     */
    public function getTpAmb()
    {
        return $this->tpAmb;
    }

    /**
     * Sets a new tpAmb
     *
     * Identificação do Ambiente:
     * 1 => Produção
     * 2 => Homologação
     *
     * @param string $tpAmb
     * @return self
     */
    public function setTpAmb($tpAmb)
    {
        $this->tpAmb = $tpAmb;
        return $this;
    }

    /**
     * Gets as verAplic
     *
     * Versão do Aplicativo que recebeu o Lote.
     *
     * @return string
     */
    public function getVerAplic()
    {
        return $this->verAplic;
    }

    /**
     * Sets a new verAplic
     *
     * Versão do Aplicativo que recebeu o Lote.
     *
     * @param string $verAplic
     * @return self
     */
    public function setVerAplic($verAplic)
    {
        $this->verAplic = $verAplic;
        return $this;
    }

    /**
     * Gets as cStat
     *
     * Código do status da mensagem enviada.
     *
     * @return string
     */
    public function getCStat()
    {
        return $this->cStat;
    }

    /**
     * Sets a new cStat
     *
     * Código do status da mensagem enviada.
     *
     * @param string $cStat
     * @return self
     */
    public function setCStat($cStat)
    {
        $this->cStat = $cStat;
        return $this;
    }

    /**
     * Gets as xMotivo
     *
     * Descrição literal do status do serviço solicitado.
     *
     * @return string
     */
    public function getXMotivo()
    {
        return $this->xMotivo;
    }

    /**
     * Sets a new xMotivo
     *
     * Descrição literal do status do serviço solicitado.
     *
     * @param string $xMotivo
     * @return self
     */
    public function setXMotivo($xMotivo)
    {
        $this->xMotivo = $xMotivo;
        return $this;
    }

    /**
     * Gets as cUF
     *
     * Código da UF de atendimento
     *
     * @return string
     */
    public function getCUF()
    {
        return $this->cUF;
    }

    /**
     * Sets a new cUF
     *
     * Código da UF de atendimento
     *
     * @param string $cUF
     * @return self
     */
    public function setCUF($cUF)
    {
        $this->cUF = $cUF;
        return $this;
    }

    /**
     * Gets as dhRecbto
     *
     * Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SSTZD
     *
     * @return string
     */
    public function getDhRecbto()
    {
        return $this->dhRecbto;
    }

    /**
     * Sets a new dhRecbto
     *
     * Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SSTZD
     *
     * @param string $dhRecbto
     * @return self
     */
    public function setDhRecbto($dhRecbto)
    {
        $this->dhRecbto = $dhRecbto;
        return $this;
    }

    /**
     * Gets as infRec
     *
     * Dados do Recibo do Lote
     *
     * @return TRetEnviNFe\InfRec
     */
    public function getInfRec()
    {
        return $this->infRec;
    }

    /**
     * Sets a new infRec
     *
     * Dados do Recibo do Lote
     *
     * @param TRetEnviNFe\InfRec $infRec
     * @return self
     */
    public function setInfRec(TRetEnviNFe\InfRec $infRec)
    {
        $this->infRec = $infRec;
        return $this;
    }

    /**
     * Gets as protNFe
     *
     * Protocolo de status resultado do processamento sincrono da NFC-e
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
     * Protocolo de status resultado do processamento sincrono da NFC-e
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
