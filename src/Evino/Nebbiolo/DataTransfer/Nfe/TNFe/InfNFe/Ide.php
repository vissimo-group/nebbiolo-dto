<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Ide\NFref;

/**
 * Class representing Ide
 */
class Ide extends BaseDataTransfer
{

    /**
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     *
     * @property string $cUF
     */
    protected $cUF = null;

    /**
     * Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e.
     *
     * @property string $cNF
     */
    protected $cNF = null;

    /**
     * Descrição da Natureza da Operação
     *
     * @property string $natOp
     */
    protected $natOp = null;

    /**
     * Código do modelo do Documento Fiscal. 55 = NF-e; 65 = NFC-e.
     *
     * @property string $mod
     */
    protected $mod = null;

    /**
     * Série do Documento Fiscal
     * série normal 0-889
     * Avulsa Fisco 890-899
     * SCAN 900-999
     *
     * @property string $serie
     */
    protected $serie = null;

    /**
     * Número do Documento Fiscal
     *
     * @property string $nNF
     */
    protected $nNF = null;

    /**
     * Data e Hora de emissão do Documento Fiscal (AAAA-MM-DDThh:mm:ssTZD)
     * ex.: 2012-09-01T13:00:00-03:00
     *
     * @property string $dhEmi
     */
    protected $dhEmi = null;

    /**
     * Data e Hora da saída ou de entrada da mercadoria / produto
     * (AAAA-MM-DDTHH:mm:ssTZD)
     *
     * @property string $dhSaiEnt
     */
    protected $dhSaiEnt = null;

    /**
     * Tipo do Documento Fiscal
     * 0 => entrada
     * 1 => saída
     *
     * @property string $tpNF
     */
    protected $tpNF = null;

    /**
     * Identificador de Local de destino da operação
     * 1 => Interna
     * 2 => Interestadual
     * 3 => Exterior
     *
     * @property string $idDest
     */
    protected $idDest = null;

    /**
     * Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     *
     * @property string $cMunFG
     */
    protected $cMunFG = null;

    /**
     * Formato de impressão do DANFE
     * 0 => sem DANFE
     * 1 => DANFe Retrato
     * 2 => DANFe Paisagem
     * 3 => DANFe Simplificado
     * 4 => DANFe NFC-e
     * 5 => DANFe NFC-e em mensagem eletrônica
     *
     * @property string $tpImp
     */
    protected $tpImp = null;

    /**
     * Forma de emissão da NF-e
     * 1 => Normal;
     * 2 => Contingência FS
     * 3 => Contingência SCAN
     * 4 => Contingência DPEC
     * 5 => Contingência FSDA
     * 6 => Contingência SVC - AN
     * 7 => Contingência SVC - RS
     * 9 => Contingência off-line NFC-e
     *
     * @property string $tpEmis
     */
    protected $tpEmis = null;

    /**
     * Digito Verificador da Chave de Acesso da NF-e
     *
     * @property string $cDV
     */
    protected $cDV = null;

    /**
     * Identificação do Ambiente:
     * 1 => Produção
     * 2 => Homologação
     *
     * @property string $tpAmb
     */
    protected $tpAmb = null;

    /**
     * Finalidade da emissão da NF-e:
     * 1 => NFe normal
     * 2 => NFe complementar
     * 3 => NFe de ajuste
     * 4 => Devolução/Retorno
     *
     * @property string $finNFe
     */
    protected $finNFe = null;

    /**
     * Indica operação com consumidor final (0-Não;1-Consumidor Final)
     *
     * @property string $indFinal
     */
    protected $indFinal = null;

    /**
     * Indicador de presença do comprador no estabelecimento comercial no momento da oepração
     * 0 => Não se aplica (ex.: Nota Fiscal complementar ou de ajuste)
     * 1 => Operação presencial
     * 2 => Não presencial, internet
     * 3 => Não presencial, teleatendimento
     * 4 => NFC-e entrega em domicílio
     * 5 => Operação presencial, fora do estabelecimento
     * 9 => Não presencial, outros
     *
     * @property string $indPres
     */
    protected $indPres = null;

    /**
     * Processo de emissão utilizado com a seguinte codificação:
     * 0 => emissão de NF-e com aplicativo do contribuinte;
     * 1 => emissão de NF-e avulsa pelo Fisco;
     * 2 => emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site do Fisco;
     * 3 => emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     *
     * @property string $procEmi
     */
    protected $procEmi = null;

    /**
     * Versão do aplicativo utilizado no processo de emissão
     *
     * @property string $verProc
     */
    protected $verProc = null;

    /**
     * Informar a data e hora de entrada em contingência contingência no formato
     * (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00.
     *
     * @property string $dhCont
     */
    protected $dhCont = null;

    /**
     * Informar a Justificativa da entrada
     *
     * @property string $xJust
     */
    protected $xJust = null;

    /**
     * Grupo de infromações da NF referenciada
     *
     * @property Ide\NFref[] $nFref
     */
    protected $nFref = array();

    /**
     * @return \stdClass|null
     */
    public function getTagrefNFe()
    {
        /** @var NFref $nf */
        foreach ($this->nFref as $nf) {
            if (!is_null($nf->getRefNFe())) {
                $tag = new \stdClass();
                $tag->refNFe = $nf->getRefNFe();
                return $tag;
            }
        }

        return null;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagrefNF()
    {
        /** @var NFref $nf */
        foreach ($this->nFref as $nf) {
            if (!is_null($nf->getRefNF())) {
                return $nf->getRefNF()->toNFeTag();
            }
        }

        return null;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagrefNFP()
    {
        /** @var NFref $nf */
        foreach ($this->nFref as $nf) {
            if (!is_null($nf->getRefNFP())) {
                return $nf->getRefNFP()->toNFeTag();
            }
        }

        return null;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagrefCTe()
    {
        /** @var NFref $nf */
        foreach ($this->nFref as $nf) {
            if (!is_null($nf->getRefCTe())) {
                $tag = new \stdClass();
                $tag->refCTe = $nf->getRefCTe();
                return $tag;
            }
        }

        return null;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagrefECF()
    {
        /** @var NFref $nf */
        foreach ($this->nFref as $nf) {
            if (!is_null($nf->getRefECF())) {
                return $nf->getRefECF()->toNFeTag();
            }
        }

        return null;
    }

    /**
     * Gets as cUF
     *
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
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
     * Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
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
     * Gets as cNF
     *
     * Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo
     * emitente para cada NF-e.
     *
     * @return string
     */
    public function getCNF()
    {
        return $this->cNF;
    }

    /**
     * Sets a new cNF
     *
     * Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo
     * emitente para cada NF-e.
     *
     * @param string $cNF
     * @return self
     */
    public function setCNF($cNF)
    {
        $this->cNF = $cNF;
        return $this;
    }

    /**
     * Gets as natOp
     *
     * Descrição da Natureza da Operação
     *
     * @return string
     */
    public function getNatOp()
    {
        return $this->natOp;
    }

    /**
     * Sets a new natOp
     *
     * Descrição da Natureza da Operação
     *
     * @param string $natOp
     * @return self
     */
    public function setNatOp($natOp)
    {
        $this->natOp = $natOp;
        return $this;
    }

    /**
     * Gets as mod
     *
     * Código do modelo do Documento Fiscal. 55 = NF-e; 65 = NFC-e.
     *
     * @return string
     */
    public function getMod()
    {
        return $this->mod;
    }

    /**
     * Sets a new mod
     *
     * Código do modelo do Documento Fiscal. 55 = NF-e; 65 = NFC-e.
     *
     * @param string $mod
     * @return self
     */
    public function setMod($mod)
    {
        $this->mod = $mod;
        return $this;
    }

    /**
     * Gets as serie
     *
     * Série do Documento Fiscal
     * série normal 0-889
     * Avulsa Fisco 890-899
     * SCAN 900-999
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Sets a new serie
     *
     * Série do Documento Fiscal
     * série normal 0-889
     * Avulsa Fisco 890-899
     * SCAN 900-999
     *
     * @param string $serie
     * @return self
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * Gets as nNF
     *
     * Número do Documento Fiscal
     *
     * @return string
     */
    public function getNNF()
    {
        return $this->nNF;
    }

    /**
     * Sets a new nNF
     *
     * Número do Documento Fiscal
     *
     * @param string $nNF
     * @return self
     */
    public function setNNF($nNF)
    {
        $this->nNF = $nNF;
        return $this;
    }

    /**
     * Gets as dhEmi
     *
     * Data e Hora de emissão do Documento Fiscal (AAAA-MM-DDThh:mm:ssTZD)
     * ex.: 2012-09-01T13:00:00-03:00
     *
     * @return string
     */
    public function getDhEmi()
    {
        return $this->dhEmi;
    }

    /**
     * Sets a new dhEmi
     *
     * Data e Hora de emissão do Documento Fiscal (AAAA-MM-DDThh:mm:ssTZD)
     * ex.: 2012-09-01T13:00:00-03:00
     *
     * @param string $dhEmi
     * @return self
     */
    public function setDhEmi($dhEmi)
    {
        $this->dhEmi = $dhEmi;
        return $this;
    }

    /**
     * Gets as dhSaiEnt
     *
     * Data e Hora da saída ou de entrada da mercadoria / produto
     * (AAAA-MM-DDTHH:mm:ssTZD)
     *
     * @return string
     */
    public function getDhSaIEnt()
    {
        return $this->dhSaiEnt;
    }

    /**
     * Sets a new dhSaiEnt
     *
     * Data e Hora da saída ou de entrada da mercadoria / produto
     * (AAAA-MM-DDTHH:mm:ssTZD)
     *
     * @param string $dhSaiEnt
     * @return self
     */
    public function setDhSaIEnt($dhSaiEnt)
    {
        $this->dhSaiEnt = $dhSaiEnt;
        return $this;
    }

    /**
     * Gets as tpNF
     *
     * Tipo do Documento Fiscal
     * 0 => entrada
     * 1 => saída
     *
     * @return string
     */
    public function getTpNF()
    {
        return $this->tpNF;
    }

    /**
     * Sets a new tpNF
     *
     * Tipo do Documento Fiscal
     * 0 => entrada
     * 1 => saída
     *
     * @param string $tpNF
     * @return self
     */
    public function setTpNF($tpNF)
    {
        $this->tpNF = $tpNF;
        return $this;
    }

    /**
     * Gets as idDest
     *
     * Identificador de Local de destino da operação
     * 1 => Interna
     * 2 => Interestadual
     * 3 => Exterior
     *
     * @return string
     */
    public function getIdDest()
    {
        return $this->idDest;
    }

    /**
     * Sets a new idDest
     *
     * Identificador de Local de destino da operação
     * 1 => Interna
     * 2 => Interestadual
     * 3 => Exterior
     *
     * @param string $idDest
     * @return self
     */
    public function setIdDest($idDest)
    {
        $this->idDest = $idDest;
        return $this;
    }

    /**
     * Gets as cMunFG
     *
     * Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     *
     * @return string
     */
    public function getCMunFG()
    {
        return $this->cMunFG;
    }

    /**
     * Sets a new cMunFG
     *
     * Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     *
     * @param string $cMunFG
     * @return self
     */
    public function setCMunFG($cMunFG)
    {
        $this->cMunFG = $cMunFG;
        return $this;
    }

    /**
     * Gets as tpImp
     *
     * Formato de impressão do DANFE
     * 0 => sem DANFE
     * 1 => DANFe Retrato
     * 2 => DANFe Paisagem
     * 3 => DANFe Simplificado
     * 4 => DANFe NFC-e
     * 5 => DANFe NFC-e em mensagem eletrônica
     *
     * @return string
     */
    public function getTpImp()
    {
        return $this->tpImp;
    }

    /**
     * Sets a new tpImp
     *
     * Formato de impressão do DANFE
     * 0 => sem DANFE
     * 1 => DANFe Retrato
     * 2 => DANFe Paisagem
     * 3 => DANFe Simplificado
     * 4 => DANFe NFC-e
     * 5 => DANFe NFC-e em mensagem eletrônica
     *
     * @param string $tpImp
     * @return self
     */
    public function setTpImp($tpImp)
    {
        $this->tpImp = $tpImp;
        return $this;
    }

    /**
     * Gets as tpEmis
     *
     * Forma de emissão da NF-e
     * 1 => Normal;
     * 2 => Contingência FS
     * 3 => Contingência SCAN
     * 4 => Contingência DPEC
     * 5 => Contingência FSDA
     * 6 => Contingência SVC - AN
     * 7 => Contingência SVC - RS
     * 9 => Contingência off-line NFC-e
     *
     * @return string
     */
    public function getTpEmis()
    {
        return $this->tpEmis;
    }

    /**
     * Sets a new tpEmis
     *
     * Forma de emissão da NF-e
     * 1 => Normal;
     * 2 => Contingência FS
     * 3 => Contingência SCAN
     * 4 => Contingência DPEC
     * 5 => Contingência FSDA
     * 6 => Contingência SVC - AN
     * 7 => Contingência SVC - RS
     * 9 => Contingência off-line NFC-e
     *
     * @param string $tpEmis
     * @return self
     */
    public function setTpEmis($tpEmis)
    {
        $this->tpEmis = $tpEmis;
        return $this;
    }

    /**
     * Gets as cDV
     *
     * Digito Verificador da Chave de Acesso da NF-e
     *
     * @return string
     */
    public function getCDV()
    {
        return $this->cDV;
    }

    /**
     * Sets a new cDV
     *
     * Digito Verificador da Chave de Acesso da NF-e
     *
     * @param string $cDV
     * @return self
     */
    public function setCDV($cDV)
    {
        $this->cDV = $cDV;
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
     * Gets as finNFe
     *
     * Finalidade da emissão da NF-e:
     * 1 => NFe normal
     * 2 => NFe complementar
     * 3 => NFe de ajuste
     * 4 => Devolução/Retorno
     *
     * @return string
     */
    public function getFinNFe()
    {
        return $this->finNFe;
    }

    /**
     * Sets a new finNFe
     *
     * Finalidade da emissão da NF-e:
     * 1 => NFe normal
     * 2 => NFe complementar
     * 3 => NFe de ajuste
     * 4 => Devolução/Retorno
     *
     * @param string $finNFe
     * @return self
     */
    public function setFinNFe($finNFe)
    {
        $this->finNFe = $finNFe;
        return $this;
    }

    /**
     * Gets as indFinal
     *
     * Indica operação com consumidor final
     * 0 => Não
     * 1 => Consumidor Final
     *
     * @return string
     */
    public function getIndFinal()
    {
        return $this->indFinal;
    }

    /**
     * Sets a new indFinal
     *
     * Indica operação com consumidor final
     * 0 => Não
     * 1 => Consumidor Final
     *
     * @param string $indFinal
     * @return self
     */
    public function setIndFinal($indFinal)
    {
        $this->indFinal = $indFinal;
        return $this;
    }

    /**
     * Gets as indPres
     *
     * Indicador de presença do comprador no estabelecimento comercial no momento da oepração
     * 0 => Não se aplica (ex.: Nota Fiscal complementar ou de ajuste)
     * 1 => Operação presencial
     * 2 => Não presencial, internet
     * 3 => Não presencial, teleatendimento
     * 4 => NFC-e entrega em domicílio
     * 5 => Operação presencial, fora do estabelecimento
     * 9 => Não presencial, outros
     *
     * @return string
     */
    public function getIndPres()
    {
        return $this->indPres;
    }

    /**
     * Sets a new indPres
     *
     * Indicador de presença do comprador no estabelecimento comercial no momento da oepração
     * 0 => Não se aplica (ex.: Nota Fiscal complementar ou de ajuste)
     * 1 => Operação presencial
     * 2 => Não presencial, internet
     * 3 => Não presencial, teleatendimento
     * 4 => NFC-e entrega em domicílio
     * 5 => Operação presencial, fora do estabelecimento
     * 9 => Não presencial, outros
     *
     * @param string $indPres
     * @return self
     */
    public function setIndPres($indPres)
    {
        $this->indPres = $indPres;
        return $this;
    }

    /**
     * Gets as procEmi
     *
     * Processo de emissão utilizado com a seguinte codificação:
     * 0 => emissão de NF-e com aplicativo do contribuinte;
     * 1 => emissão de NF-e avulsa pelo Fisco;
     * 2 => emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site do Fisco;
     * 3 => emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     *
     * @return string
     */
    public function getProcEmi()
    {
        return $this->procEmi;
    }

    /**
     * Sets a new procEmi
     *
     * Processo de emissão utilizado com a seguinte codificação:
     * 0 => emissão de NF-e com aplicativo do contribuinte;
     * 1 => emissão de NF-e avulsa pelo Fisco;
     * 2 => emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site do Fisco;
     * 3 => emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     *
     * @param string $procEmi
     * @return self
     */
    public function setProcEmi($procEmi)
    {
        $this->procEmi = $procEmi;
        return $this;
    }

    /**
     * Gets as verProc
     *
     * Versão do aplicativo utilizado no processo de emissão
     *
     * @return string
     */
    public function getVerProc()
    {
        return $this->verProc;
    }

    /**
     * Sets a new verProc
     *
     * Versão do aplicativo utilizado no processo de emissão
     *
     * @param string $verProc
     * @return self
     */
    public function setVerProc($verProc)
    {
        $this->verProc = $verProc;
        return $this;
    }

    /**
     * Gets as dhCont
     *
     * Informar a data e hora de entrada em contingência contingência no formato
     * (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00.
     *
     * @return string
     */
    public function getDhCont()
    {
        return $this->dhCont;
    }

    /**
     * Sets a new dhCont
     *
     * Informar a data e hora de entrada em contingência contingência no formato
     * (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00.
     *
     * @param string $dhCont
     * @return self
     */
    public function setDhCont($dhCont)
    {
        $this->dhCont = $dhCont;
        return $this;
    }

    /**
     * Gets as xJust
     *
     * Informar a Justificativa da entrada
     *
     * @return string
     */
    public function getXJust()
    {
        return $this->xJust;
    }

    /**
     * Sets a new xJust
     *
     * Informar a Justificativa da entrada
     *
     * @param string $xJust
     * @return self
     */
    public function setXJust($xJust)
    {
        $this->xJust = $xJust;
        return $this;
    }

    /**
     * Adds as nFref
     *
     * Grupo de infromações da NF referenciada
     *
     * @return self
     * @param Ide\NFref $nFref
     */
    public function addToNFref($nFref)
    {
        $this->nFref[] = $nFref;
        return $this;
    }

    /**
     * isset nFref
     *
     * Grupo de infromações da NF referenciada
     *
     * @param int $index
     * @return boolean
     */
    public function issetNFref($index)
    {
        return isset($this->nFref[$index]);
    }

    /**
     * unset nFref
     *
     * Grupo de infromações da NF referenciada
     *
     * @param int $index
     * @return void
     */
    public function unsetNFref($index)
    {
        unset($this->nFref[$index]);
    }

    /**
     * Gets as nFref
     *
     * Grupo de infromações da NF referenciada
     *
     * @return Ide\NFref[]
     */
    public function getNFref()
    {
        return $this->nFref;
    }

    /**
     * Sets a new nFref
     *
     * Grupo de infromações da NF referenciada
     *
     * @param Ide\NFref[] $nFref
     * @return self
     */
    public function setNFref($nFref)
    {
        $this->nFref = $nFref;
        return $this;
    }

}