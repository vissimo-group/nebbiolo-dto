<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Total;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMSTot
 */
class ICMSTot extends BaseDataTransfer
{
    /**
     * BC do ICMS
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Valor Total do ICMS
     *
     * @property string $vICMS
     */
    protected $vICMS = null;

    /**
     * Valor Total do ICMS desonerado
     *
     * @property string $vICMSDeson
     */
    protected $vICMSDeson = null;

    /**
     * Valor total do ICMS relativo ao Fundo de Combate à Pobreza (FCP) para a UF de destino.
     *
     * @property string $vFCPUFDest
     */
    protected $vFCPUFDest = null;

    /**
     * Valor total do ICMS de partilha para a UF do destinatário
     *
     * @property string $vICMSUFDest
     */
    protected $vICMSUFDest = null;

    /**
     * Valor total do ICMS de partilha para a UF do remetente
     *
     * @property string $vICMSUFRemet
     */
    protected $vICMSUFRemet = null;

    /**
     * Valor Total do FCP (Fundo de Combate à Pobreza).
     *
     * @property string $vFCP
     */
    protected $vFCP = null;

    /**
     * BC do ICMS ST
     *
     * @property string $vBCST
     */
    protected $vBCST = null;

    /**
     * Valor Total do ICMS ST
     *
     * @property string $vST
     */
    protected $vST = null;

    /**
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido por substituição tributária.
     *
     * @property string $vFCPST
     */
    protected $vFCPST = null;

    /**
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido anteriormente por substituição tributária.
     *
     * @property string $vFCPSTRet
     */
    protected $vFCPSTRet = null;

    /**
     * Valor Total dos produtos e serviços
     *
     * @property string $vProd
     */
    protected $vProd = null;

    /**
     * Valor Total do Frete
     *
     * @property string $vFrete
     */
    protected $vFrete = null;

    /**
     * Valor Total do Seguro
     *
     * @property string $vSeg
     */
    protected $vSeg = null;

    /**
     * Valor Total do Desconto
     *
     * @property string $vDesc
     */
    protected $vDesc = null;

    /**
     * Valor Total do II
     *
     * @property string $vII
     */
    protected $vII = null;

    /**
     * Valor Total do IPI
     *
     * @property string $vIPI
     */
    protected $vIPI = null;

    /**
     * Valor Total do IPI devolvido. Deve ser informado quando preenchido o Grupo
     * Tributos Devolvidos na emissão de nota finNFe=4 (devolução) nas operações
     * com não contribuintes do IPI. Corresponde ao total da soma dos campos id: UA04.
     *
     * @property string $vIPIDevol
     */
    protected $vIPIDevol = null;

    /**
     * Valor do PIS
     *
     * @property string $vPIS
     */
    protected $vPIS = null;

    /**
     * Valor do COFINS
     *
     * @property string $vCOFINS
     */
    protected $vCOFINS = null;

    /**
     * Outras Despesas acessórias
     *
     * @property string $vOutro
     */
    protected $vOutro = null;

    /**
     * Valor Total da NF-e
     *
     * @property string $vNF
     */
    protected $vNF = null;

    /**
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @property string $vTotTrib
     */
    protected $vTotTrib = null;

    /**
     * Gets as vBC
     *
     * BC do ICMS
     *
     * @return string
     */
    public function getVBC()
    {
        return $this->vBC;
    }

    /**
     * Sets a new vBC
     *
     * BC do ICMS
     *
     * @param string $vBC
     * @return self
     */
    public function setVBC($vBC)
    {
        $this->vBC = $vBC;
        return $this;
    }

    /**
     * Gets as vICMS
     *
     * Valor Total do ICMS
     *
     * @return string
     */
    public function getVICMS()
    {
        return $this->vICMS;
    }

    /**
     * Sets a new vICMS
     *
     * Valor Total do ICMS
     *
     * @param string $vICMS
     * @return self
     */
    public function setVICMS($vICMS)
    {
        $this->vICMS = $vICMS;
        return $this;
    }

    /**
     * Gets as vICMSDeson
     *
     * Valor Total do ICMS desonerado
     *
     * @return string
     */
    public function getVICMSDeson()
    {
        return $this->vICMSDeson;
    }

    /**
     * Sets a new vICMSDeson
     *
     * Valor Total do ICMS desonerado
     *
     * @param string $vICMSDeson
     * @return self
     */
    public function setVICMSDeson($vICMSDeson)
    {
        $this->vICMSDeson = $vICMSDeson;
        return $this;
    }

    /**
     * Gets as vFCPUFDest
     *
     * Valor total do ICMS relativo ao Fundo de Combate à Pobreza (FCP) para a UF de destino.
     *
     * @return string
     */
    public function getVFCPUFDest()
    {
        return $this->vFCPUFDest;
    }

    /**
     * Sets a new vFCPUFDest
     *
     * Valor total do ICMS relativo ao Fundo de Combate à Pobreza (FCP) para a UF de destino.
     *
     * @param string $vFCPUFDest
     * @return self
     */
    public function setVFCPUFDest($vFCPUFDest)
    {
        $this->vFCPUFDest = $vFCPUFDest;
        return $this;
    }

    /**
     * Gets as vICMSUFDest
     *
     * Valor total do ICMS de partilha para a UF do destinatário
     *
     * @return string
     */
    public function getVICMSUFDest()
    {
        return $this->vICMSUFDest;
    }

    /**
     * Sets a new vICMSUFDest
     *
     * Valor total do ICMS de partilha para a UF do destinatário
     *
     * @param string $vICMSUFDest
     * @return self
     */
    public function setVICMSUFDest($vICMSUFDest)
    {
        $this->vICMSUFDest = $vICMSUFDest;
        return $this;
    }

    /**
     * Gets as vICMSUFRemet
     *
     * Valor total do ICMS de partilha para a UF do remetente
     *
     * @return string
     */
    public function getVICMSUFRemet()
    {
        return $this->vICMSUFRemet;
    }

    /**
     * Sets a new vICMSUFRemet
     *
     * Valor total do ICMS de partilha para a UF do remetente
     *
     * @param string $vICMSUFRemet
     * @return self
     */
    public function setVICMSUFRemet($vICMSUFRemet)
    {
        $this->vICMSUFRemet = $vICMSUFRemet;
        return $this;
    }

    /**
     * Gets as vFCP
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza).
     *
     * @return string
     */
    public function getVFCP()
    {
        return $this->vFCP;
    }

    /**
     * Sets a new vFCP
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza).
     *
     * @param string $vFCP
     * @return self
     */
    public function setVFCP($vFCP)
    {
        $this->vFCP = $vFCP;
        return $this;
    }

    /**
     * Gets as vBCST
     *
     * BC do ICMS ST
     *
     * @return string
     */
    public function getVBCST()
    {
        return $this->vBCST;
    }

    /**
     * Sets a new vBCST
     *
     * BC do ICMS ST
     *
     * @param string $vBCST
     * @return self
     */
    public function setVBCST($vBCST)
    {
        $this->vBCST = $vBCST;
        return $this;
    }

    /**
     * Gets as vST
     *
     * Valor Total do ICMS ST
     *
     * @return string
     */
    public function getVST()
    {
        return $this->vST;
    }

    /**
     * Sets a new vST
     *
     * Valor Total do ICMS ST
     *
     * @param string $vST
     * @return self
     */
    public function setVST($vST)
    {
        $this->vST = $vST;
        return $this;
    }

    /**
     * Gets as vFCPST
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido por substituição tributária.
     *
     * @return string
     */
    public function getVFCPST()
    {
        return $this->vFCPST;
    }

    /**
     * Sets a new vFCPST
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido por substituição tributária.
     *
     * @param string $vFCPST
     * @return self
     */
    public function setVFCPST($vFCPST)
    {
        $this->vFCPST = $vFCPST;
        return $this;
    }

    /**
     * Gets as vFCPSTRet
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido anteriormente por substituição tributária.
     *
     * @return string
     */
    public function getVFCPSTRet()
    {
        return $this->vFCPSTRet;
    }

    /**
     * Sets a new vFCPSTRet
     *
     * Valor Total do FCP (Fundo de Combate à Pobreza) retido anteriormente por substituição tributária.
     *
     * @param string $vFCPSTRet
     * @return self
     */
    public function setVFCPSTRet($vFCPSTRet)
    {
        $this->vFCPSTRet = $vFCPSTRet;
        return $this;
    }

    /**
     * Gets as vProd
     *
     * Valor Total dos produtos e serviços
     *
     * @return string
     */
    public function getVProd()
    {
        return $this->vProd;
    }

    /**
     * Sets a new vProd
     *
     * Valor Total dos produtos e serviços
     *
     * @param string $vProd
     * @return self
     */
    public function setVProd($vProd)
    {
        $this->vProd = $vProd;
        return $this;
    }

    /**
     * Gets as vFrete
     *
     * Valor Total do Frete
     *
     * @return string
     */
    public function getVFrete()
    {
        return $this->vFrete;
    }

    /**
     * Sets a new vFrete
     *
     * Valor Total do Frete
     *
     * @param string $vFrete
     * @return self
     */
    public function setVFrete($vFrete)
    {
        $this->vFrete = $vFrete;
        return $this;
    }

    /**
     * Gets as vSeg
     *
     * Valor Total do Seguro
     *
     * @return string
     */
    public function getVSeg()
    {
        return $this->vSeg;
    }

    /**
     * Sets a new vSeg
     *
     * Valor Total do Seguro
     *
     * @param string $vSeg
     * @return self
     */
    public function setVSeg($vSeg)
    {
        $this->vSeg = $vSeg;
        return $this;
    }

    /**
     * Gets as vDesc
     *
     * Valor Total do Desconto
     *
     * @return string
     */
    public function getVDesc()
    {
        return $this->vDesc;
    }

    /**
     * Sets a new vDesc
     *
     * Valor Total do Desconto
     *
     * @param string $vDesc
     * @return self
     */
    public function setVDesc($vDesc)
    {
        $this->vDesc = $vDesc;
        return $this;
    }

    /**
     * Gets as vII
     *
     * Valor Total do II
     *
     * @return string
     */
    public function getVII()
    {
        return $this->vII;
    }

    /**
     * Sets a new vII
     *
     * Valor Total do II
     *
     * @param string $vII
     * @return self
     */
    public function setVII($vII)
    {
        $this->vII = $vII;
        return $this;
    }

    /**
     * Gets as vIPI
     *
     * Valor Total do IPI
     *
     * @return string
     */
    public function getVIPI()
    {
        return $this->vIPI;
    }

    /**
     * Sets a new vIPI
     *
     * Valor Total do IPI
     *
     * @param string $vIPI
     * @return self
     */
    public function setVIPI($vIPI)
    {
        $this->vIPI = $vIPI;
        return $this;
    }

    /**
     * Gets as vIPIDevol
     *
     * Valor Total do IPI devolvido. Deve ser informado quando preenchido o Grupo
     * Tributos Devolvidos na emissão de nota finNFe=4 (devolução) nas operações
     * com não contribuintes do IPI. Corresponde ao total da soma dos campos id: UA04.
     *
     * @return string
     */
    public function getVIPIDevol()
    {
        return $this->vIPIDevol;
    }

    /**
     * Sets a new vIPIDevol
     *
     * Valor Total do IPI devolvido. Deve ser informado quando preenchido o Grupo
     * Tributos Devolvidos na emissão de nota finNFe=4 (devolução) nas operações
     * com não contribuintes do IPI. Corresponde ao total da soma dos campos id: UA04.
     *
     * @param string $vIPIDevol
     * @return self
     */
    public function setVIPIDevol($vIPIDevol)
    {
        $this->vIPIDevol = $vIPIDevol;
        return $this;
    }

    /**
     * Gets as vPIS
     *
     * Valor do PIS
     *
     * @return string
     */
    public function getVPIS()
    {
        return $this->vPIS;
    }

    /**
     * Sets a new vPIS
     *
     * Valor do PIS
     *
     * @param string $vPIS
     * @return self
     */
    public function setVPIS($vPIS)
    {
        $this->vPIS = $vPIS;
        return $this;
    }

    /**
     * Gets as vCOFINS
     *
     * Valor do COFINS
     *
     * @return string
     */
    public function getVCOFINS()
    {
        return $this->vCOFINS;
    }

    /**
     * Sets a new vCOFINS
     *
     * Valor do COFINS
     *
     * @param string $vCOFINS
     * @return self
     */
    public function setVCOFINS($vCOFINS)
    {
        $this->vCOFINS = $vCOFINS;
        return $this;
    }

    /**
     * Gets as vOutro
     *
     * Outras Despesas acessórias
     *
     * @return string
     */
    public function getVOutro()
    {
        return $this->vOutro;
    }

    /**
     * Sets a new vOutro
     *
     * Outras Despesas acessórias
     *
     * @param string $vOutro
     * @return self
     */
    public function setVOutro($vOutro)
    {
        $this->vOutro = $vOutro;
        return $this;
    }

    /**
     * Gets as vNF
     *
     * Valor Total da NF-e
     *
     * @return string
     */
    public function getVNF()
    {
        return $this->vNF;
    }

    /**
     * Sets a new vNF
     *
     * Valor Total da NF-e
     *
     * @param string $vNF
     * @return self
     */
    public function setVNF($vNF)
    {
        $this->vNF = $vNF;
        return $this;
    }

    /**
     * Gets as vTotTrib
     *
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @return string
     */
    public function getVTotTrib()
    {
        return $this->vTotTrib;
    }

    /**
     * Sets a new vTotTrib
     *
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @param string $vTotTrib
     * @return self
     */
    public function setVTotTrib($vTotTrib)
    {
        $this->vTotTrib = $vTotTrib;
        return $this;
    }
}
