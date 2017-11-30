<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing Prod
 */
class Prod extends BaseGallywixDataTransfer
{

    /**
     * Código do produto ou serviço. Preencher com CFOP caso se trate de itens não
     * relacionados com mercadorias/produto e que o contribuinte não possua
     * codificação própria
     * Formato ”CFOP9999”.
     *
     * @property string $cProd
     */
    protected $cProd = null;

    /**
     * GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de
     * barras
     *
     * @property string $cEAN
     */
    protected $cEAN = null;

    /**
     * Descrição do produto ou serviço
     *
     * @property string $xProd
     */
    protected $xProd = null;

    /**
     * Código NCM (8 posições), será permitida a informação do gênero (posição
     * do capítulo do NCM) quando a operação não for de comércio exterior
     * (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso
     * de item de serviço ou item que não tenham produto (Ex. transferência de
     * crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros)
     * (v2.0)
     *
     * @property string $NCM
     */
    protected $NCM = null;

    /**
     * Nomenclatura de Valor aduaneio e Estatístico
     *
     * @property string[] $nVE
     */
    protected $nVE = array();

    /**
     * Codigo especificador da Substuicao Tributaria - CEST, que identifica a
     * mercadoria sujeita aos regimes de substituicao tributária e de antecipação do
     * recolhimento do imposto
     *
     * @property string $CEST
     */
    protected $CEST = null;

    /**
     * @property string $indEscala
     */
    protected $indEscala = null;

    /**
     * CNPJ do Fabricante da Mercadoria, obrigatório para produto em escala NÃO
     * relevante.
     *
     * @property string $CNPJFab
     */
    protected $CNPJFab = null;

    /**
     * @property string $cBenef
     */
    protected $cBenef = null;

    /**
     * Código EX TIPI (3 posições)
     *
     * @property string $EXTIPI
     */
    protected $EXTIPI = null;

    /**
     * Cfop
     *
     * @property string $CFOP
     */
    protected $CFOP = null;

    /**
     * Unidade comercial
     *
     * @property string $uCom
     */
    protected $uCom = null;

    /**
     * Quantidade Comercial do produto, alterado para aceitar de 0 a 4 casas decimais e
     * 11 inteiros.
     *
     * @property string $qCom
     */
    protected $qCom = null;

    /**
     * Valor unitário de comercialização - alterado para aceitar 0 a 10 casas
     * decimais e 11 inteiros
     *
     * @property string $vUnCom
     */
    protected $vUnCom = null;

    /**
     * Valor bruto do produto ou serviço.
     *
     * @property string $vProd
     */
    protected $vProd = null;

    /**
     * GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou
     * código de barras
     *
     * @property string $cEANTrib
     */
    protected $cEANTrib = null;

    /**
     * Unidade Tributável
     *
     * @property string $uTrib
     */
    protected $uTrib = null;

    /**
     * Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11
     * inteiros
     *
     * @property string $qTrib
     */
    protected $qTrib = null;

    /**
     * Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais
     * e 11 inteiros
     *
     * @property string $vUnTrib
     */
    protected $vUnTrib = null;

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
     * Valor do Desconto
     *
     * @property string $vDesc
     */
    protected $vDesc = null;

    /**
     * Outras despesas acessórias
     *
     * @property string $vOutro
     */
    protected $vOutro = null;

    /**
     * Este campo deverá ser preenchido com:
     *  0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)
     *  1 – o valor do item (vProd) compõe o valor total da NF-e (vProd)
     *
     * @property string $indTot
     */
    protected $indTot = null;

    /**
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @property Prod\DI[]
     * $DI
     */
    protected $DI = array();

    /**
     * Detalhe da exportação
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport[]
     * $detExport
     */
    protected $detExport = array();

    /**
     * pedido de compra - Informação de interesse do emissor para controle do B2B.
     *
     * @property string $xPed
     */
    protected $xPed = null;

    /**
     * Número do Item do Pedido de Compra - Identificação do número do item do
     * pedido de Compra
     *
     * @property string $nItemPed
     */
    protected $nItemPed = null;

    /**
     * Número de controle da FCI - Ficha de Conteúdo de Importação.
     *
     * @property string $nFCI
     */
    protected $nFCI = null;

    /**
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Rastro[] $rastro
     */
    protected $rastro = array();

    /**
     * Veículos novos
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\VeicProd
     * $veicProd
     */
    protected $veicProd = null;

    /**
     * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     *
     * @property Prod\Med
     * $med
     */
    protected $med = null;

    /**
     * Armamentos
     *
     * @property Prod\Arma[]
     * $arma
     */
    protected $arma = array();

    /**
     * Informar apenas para operações com combustíveis líquidos
     *
     * @property Prod\Comb
     * $comb
     */
    protected $comb = null;

    /**
     * Número do RECOPI
     *
     * @property string $nRECOPI
     */
    protected $nRECOPI = null;

    /**
     * Gets as cProd
     *
     * Código do produto ou serviço. Preencher com CFOP caso se trate de itens não
     * relacionados com mercadorias/produto e que o contribuinte não possua
     * codificação própria
     * Formato ”CFOP9999”.
     *
     * @return string
     */
    public function getCProd()
    {
        return $this->cProd;
    }

    /**
     * Sets a new cProd
     *
     * Código do produto ou serviço. Preencher com CFOP caso se trate de itens não
     * relacionados com mercadorias/produto e que o contribuinte não possua
     * codificação própria
     * Formato ”CFOP9999”.
     *
     * @param string $cProd
     * @return self
     */
    public function setCProd($cProd)
    {
        $this->cProd = $cProd;
        return $this;
    }

    /**
     * Gets as cEAN
     *
     * GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de
     * barras
     *
     * @return string
     */
    public function getcEAN()
    {
        return $this->cEAN;
    }

    /**
     * Sets a new cEAN
     *
     * GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de
     * barras
     *
     * @param string $cEAN
     * @return self
     */
    public function setcEAN($cEAN)
    {
        $this->cEAN = $cEAN;
        return $this;
    }

    /**
     * Gets as xProd
     *
     * Descrição do produto ou serviço
     *
     * @return string
     */
    public function getXProd()
    {
        return $this->xProd;
    }

    /**
     * Sets a new xProd
     *
     * Descrição do produto ou serviço
     *
     * @param string $xProd
     * @return self
     */
    public function setXProd($xProd)
    {
        $this->xProd = $xProd;
        return $this;
    }

    /**
     * Gets as NCM
     *
     * Código NCM (8 posições), será permitida a informação do gênero (posição
     * do capítulo do NCM) quando a operação não for de comércio exterior
     * (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso
     * de item de serviço ou item que não tenham produto (Ex. transferência de
     * crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros)
     * (v2.0)
     *
     * @return string
     */
    public function getNCM()
    {
        return $this->NCM;
    }

    /**
     * Sets a new NCM
     *
     * Código NCM (8 posições), será permitida a informação do gênero (posição
     * do capítulo do NCM) quando a operação não for de comércio exterior
     * (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso
     * de item de serviço ou item que não tenham produto (Ex. transferência de
     * crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros)
     * (v2.0)
     *
     * @param string $NCM
     * @return self
     */
    public function setNCM($NCM)
    {
        $this->NCM = $NCM;
        return $this;
    }

    /**
     * Adds as nVE
     *
     * Nomenclatura de Valor aduaneio e Estatístico
     *
     * @return self
     * @param string $nVE
     */
    public function addToNVE($nVE)
    {
        $this->nVE[] = $nVE;
        return $this;
    }

    /**
     * isset nVE
     *
     * Nomenclatura de Valor aduaneio e Estatístico
     *
     * @param int $index
     * @return boolean
     */
    public function issetNVE($index)
    {
        return isset($this->nVE[$index]);
    }

    /**
     * unset nVE
     *
     * Nomenclatura de Valor aduaneio e Estatístico
     *
     * @param int $index
     * @return void
     */
    public function unsetNVE($index)
    {
        unset($this->nVE[$index]);
    }

    /**
     * Gets as nVE
     *
     * Nomenclatura de Valor aduaneio e Estatístico
     *
     * @return string[]
     */
    public function getNVE()
    {
        return $this->nVE;
    }

	/**
	 * Sets a new nVE
	 *
	 * Nomenclatura de Valor aduaneio e Estatístico
	 *
	 * @param array $nVE
	 * @return Prod
	 */
    public function setNVE(array $nVE)
    {
        $this->nVE = $nVE;
        return $this;
    }

    /**
     * Gets as CEST
     *
     * Codigo especificador da Substuicao Tributaria - CEST, que identifica a
     * mercadoria sujeita aos regimes de substituicao tributária e de antecipação do
     * recolhimento do imposto
     *
     * @return string
     */
    public function getCEST()
    {
        return $this->CEST;
    }

    /**
     * Sets a new CEST
     *
     * Codigo especificador da Substuicao Tributaria - CEST, que identifica a
     * mercadoria sujeita aos regimes de substituicao tributária e de antecipação do
     * recolhimento do imposto
     *
     * @param string $CEST
     * @return self
     */
    public function setCEST($CEST)
    {
        $this->CEST = $CEST;
        return $this;
    }

    /**
     * Gets as indEscala
     *
     * @return string
     */
    public function getIndEscala()
    {
        return $this->indEscala;
    }

    /**
     * Sets a new indEscala
     *
     * @param string $indEscala
     * @return self
     */
    public function setIndEscala($indEscala)
    {
        $this->indEscala = $indEscala;
        return $this;
    }

    /**
     * Gets as CNPJFab
     *
     * CNPJ do Fabricante da Mercadoria, obrigatório para produto em escala NÃO
     * relevante.
     *
     * @return string
     */
    public function getCNPJFab()
    {
        return $this->CNPJFab;
    }

    /**
     * Sets a new CNPJFab
     *
     * CNPJ do Fabricante da Mercadoria, obrigatório para produto em escala NÃO
     * relevante.
     *
     * @param string $CNPJFab
     * @return self
     */
    public function setCNPJFab($CNPJFab)
    {
        $this->CNPJFab = $CNPJFab;
        return $this;
    }

    /**
     * Gets as cBenef
     *
     * @return string
     */
    public function getCBenef()
    {
        return $this->cBenef;
    }

    /**
     * Sets a new cBenef
     *
     * @param string $cBenef
     * @return self
     */
    public function setCBenef($cBenef)
    {
        $this->cBenef = $cBenef;
        return $this;
    }

    /**
     * Gets as EXTIPI
     *
     * Código EX TIPI (3 posições)
     *
     * @return string
     */
    public function getEXTIPI()
    {
        return $this->EXTIPI;
    }

    /**
     * Sets a new EXTIPI
     *
     * Código EX TIPI (3 posições)
     *
     * @param string $EXTIPI
     * @return self
     */
    public function setEXTIPI($EXTIPI)
    {
        $this->EXTIPI = $EXTIPI;
        return $this;
    }

    /**
     * Gets as CFOP
     *
     * Cfop
     *
     * @return string
     */
    public function getCFOP()
    {
        return $this->CFOP;
    }

    /**
     * Sets a new CFOP
     *
     * Cfop
     *
     * @param string $CFOP
     * @return self
     */
    public function setCFOP($CFOP)
    {
        $this->CFOP = $CFOP;
        return $this;
    }

    /**
     * Gets as uCom
     *
     * Unidade comercial
     *
     * @return string
     */
    public function getUCom()
    {
        return $this->uCom;
    }

    /**
     * Sets a new uCom
     *
     * Unidade comercial
     *
     * @param string $uCom
     * @return self
     */
    public function setUCom($uCom)
    {
        $this->uCom = $uCom;
        return $this;
    }

    /**
     * Gets as qCom
     *
     * Quantidade Comercial do produto, alterado para aceitar de 0 a 4 casas decimais e
     * 11 inteiros.
     *
     * @return string
     */
    public function getQCom()
    {
        return $this->qCom;
    }

    /**
     * Sets a new qCom
     *
     * Quantidade Comercial do produto, alterado para aceitar de 0 a 4 casas decimais e
     * 11 inteiros.
     *
     * @param string $qCom
     * @return self
     */
    public function setQCom($qCom)
    {
        $this->qCom = $qCom;
        return $this;
    }

    /**
     * Gets as vUnCom
     *
     * Valor unitário de comercialização - alterado para aceitar 0 a 10 casas
     * decimais e 11 inteiros
     *
     * @return string
     */
    public function getVUnCom()
    {
        return $this->vUnCom;
    }

    /**
     * Sets a new vUnCom
     *
     * Valor unitário de comercialização - alterado para aceitar 0 a 10 casas
     * decimais e 11 inteiros
     *
     * @param string $vUnCom
     * @return self
     */
    public function setVUnCom($vUnCom)
    {
        $this->vUnCom = $vUnCom;
        return $this;
    }

    /**
     * Gets as vProd
     *
     * Valor bruto do produto ou serviço.
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
     * Valor bruto do produto ou serviço.
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
     * Gets as cEANTrib
     *
     * GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou
     * código de barras
     *
     * @return string
     */
    public function getcEANTrib()
    {
        return $this->cEANTrib;
    }

    /**
     * Sets a new cEANTrib
     *
     * GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou
     * código de barras
     *
     * @param string $cEANTrib
     * @return self
     */
    public function setcEANTrib($cEANTrib)
    {
        $this->cEANTrib = $cEANTrib;
        return $this;
    }

    /**
     * Gets as uTrib
     *
     * Unidade Tributável
     *
     * @return string
     */
    public function getUTrib()
    {
        return $this->uTrib;
    }

    /**
     * Sets a new uTrib
     *
     * Unidade Tributável
     *
     * @param string $uTrib
     * @return self
     */
    public function setUTrib($uTrib)
    {
        $this->uTrib = $uTrib;
        return $this;
    }

    /**
     * Gets as qTrib
     *
     * Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11
     * inteiros
     *
     * @return string
     */
    public function getQTrib()
    {
        return $this->qTrib;
    }

    /**
     * Sets a new qTrib
     *
     * Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11
     * inteiros
     *
     * @param string $qTrib
     * @return self
     */
    public function setQTrib($qTrib)
    {
        $this->qTrib = $qTrib;
        return $this;
    }

    /**
     * Gets as vUnTrib
     *
     * Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais
     * e 11 inteiros
     *
     * @return string
     */
    public function getVUnTrib()
    {
        return $this->vUnTrib;
    }

    /**
     * Sets a new vUnTrib
     *
     * Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais
     * e 11 inteiros
     *
     * @param string $vUnTrib
     * @return self
     */
    public function setVUnTrib($vUnTrib)
    {
        $this->vUnTrib = $vUnTrib;
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
     * Valor do Desconto
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
     * Valor do Desconto
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
     * Gets as vOutro
     *
     * Outras despesas acessórias
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
     * Outras despesas acessórias
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
     * Gets as indTot
     *
     * Este campo deverá ser preenchido com:
     *  0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)
     *  1 – o valor do item (vProd) compõe o valor total da NF-e (vProd)
     *
     * @return string
     */
    public function getIndTot()
    {
        return $this->indTot;
    }

    /**
     * Sets a new indTot
     *
     * Este campo deverá ser preenchido com:
     *  0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)
     *  1 – o valor do item (vProd) compõe o valor total da NF-e (vProd)
     *
     * @param string $indTot
     * @return self
     */
    public function setIndTot($indTot)
    {
        $this->indTot = $indTot;
        return $this;
    }

    /**
     * Adds as DI
     *
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @return self
     * @param Prod\DI $DI
     */
    public function addToDI(Prod\DI $DI)
    {
        $this->DI[] = $DI;
        return $this;
    }

    /**
     * isset DI
     *
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @param int $index
     * @return boolean
     */
    public function issetDI($index)
    {
        return isset($this->DI[$index]);
    }

    /**
     * unset DI
     *
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @param int $index
     * @return void
     */
    public function unsetDI($index)
    {
        unset($this->DI[$index]);
    }

    /**
     * Gets as DI
     *
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @return Prod\DI[]
     */
    public function getDI()
    {
        return $this->DI;
    }

    /**
     * Sets a new DI
     *
     * Delcaração de Importação
     * (NT 2011/004)
     *
     * @param Prod\DI[] $DI
     * @return self
     */
    public function setDI(array $DI)
    {
        $this->DI = $DI;
        return $this;
    }

    /**
     * Adds as detExport
     *
     * Detalhe da exportação
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport
     * $detExport
     */
    public function addToDetExport(Prod\DetExport $detExport)
    {
        $this->detExport[] = $detExport;
        return $this;
    }

    /**
     * isset detExport
     *
     * Detalhe da exportação
     *
     * @param int $index
     * @return boolean
     */
    public function issetDetExport($index)
    {
        return isset($this->detExport[$index]);
    }

    /**
     * unset detExport
     *
     * Detalhe da exportação
     *
     * @param int $index
     * @return void
     */
    public function unsetDetExport($index)
    {
        unset($this->detExport[$index]);
    }

    /**
     * Gets as detExport
     *
     * Detalhe da exportação
     * @return array \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport[]
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport[]
     */
    public function getDetExport()
    {
        return $this->detExport;
    }

	/**
	 * Sets a new detExport
	 *
	 * Detalhe da exportação
	 *
	 * @param array $detExport
	 * @return Prod
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport[]* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport[]
	 * $detExport
	 */
    public function setDetExport(array $detExport)
    {
        $this->detExport = $detExport;
        return $this;
    }

    /**
     * Gets as xPed
     *
     * pedido de compra - Informação de interesse do emissor para controle do B2B.
     *
     * @return string
     */
    public function getXPed()
    {
        return $this->xPed;
    }

    /**
     * Sets a new xPed
     *
     * pedido de compra - Informação de interesse do emissor para controle do B2B.
     *
     * @param string $xPed
     * @return self
     */
    public function setXPed($xPed)
    {
        $this->xPed = $xPed;
        return $this;
    }

    /**
     * Gets as nItemPed
     *
     * Número do Item do Pedido de Compra - Identificação do número do item do
     * pedido de Compra
     *
     * @return string
     */
    public function getNItemPed()
    {
        return $this->nItemPed;
    }

    /**
     * Sets a new nItemPed
     *
     * Número do Item do Pedido de Compra - Identificação do número do item do
     * pedido de Compra
     *
     * @param string $nItemPed
     * @return self
     */
    public function setNItemPed($nItemPed)
    {
        $this->nItemPed = $nItemPed;
        return $this;
    }

    /**
     * Gets as nFCI
     *
     * Número de controle da FCI - Ficha de Conteúdo de Importação.
     *
     * @return string
     */
    public function getNFCI()
    {
        return $this->nFCI;
    }

    /**
     * Sets a new nFCI
     *
     * Número de controle da FCI - Ficha de Conteúdo de Importação.
     *
     * @param string $nFCI
     * @return self
     */
    public function setNFCI($nFCI)
    {
        $this->nFCI = $nFCI;
        return $this;
    }

    /**
     * Adds as rastro
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Rastro
     * $rastro
     */
    public function addToRastro(Prod\Rastro $rastro)
    {
        $this->rastro[] = $rastro;
        return $this;
    }

    /**
     * isset rastro
     *
     * @param int $index
     * @return boolean
     */
    public function issetRastro($index)
    {
        return isset($this->rastro[$index]);
    }

    /**
     * unset rastro
     *
     * @param int $index
     * @return void
     */
    public function unsetRastro($index)
    {
        unset($this->rastro[$index]);
    }

    /**
     * Gets as rastro
     *
     * @return Prod\Rastro[]
     */
    public function getRastro()
    {
        return $this->rastro;
    }

    /**
     * Sets a new rastro
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Rastro[]
     * $rastro
     * @return self
     */
    public function setRastro(array $rastro)
    {
        $this->rastro = $rastro;
        return $this;
    }

    /**
     * Gets as veicProd
     *
     * Veículos novos
     *
     * @return Prod\VeicProd
     */
    public function getVeicProd()
    {
        return $this->veicProd;
    }

    /**
     * Sets a new veicProd
     *
     * Veículos novos
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\VeicProd
     * $veicProd
     * @return self
     */
    public function setVeicProd(Prod\VeicProd $veicProd)
    {
        $this->veicProd = $veicProd;
        return $this;
    }

    /**
     * Gets as med
     *
     * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     *
     * @return Prod\Med
     */
    public function getMed()
    {
        return $this->med;
    }

    /**
     * Sets a new med
     *
     * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     *
     * @param Prod\Med $med
     * @return self
     */
    public function setMed(Prod\Med $med)
    {
        $this->med = $med;
        return $this;
    }

    /**
     * Adds as arma
     *
     * Armamentos
     *
     * @return self
     * @param Prod\Arma $arma
     */
    public function addToArma(Prod\Arma $arma)
    {
        $this->arma[] = $arma;
        return $this;
    }

    /**
     * isset arma
     *
     * Armamentos
     *
     * @param int $index
     * @return boolean
     */
    public function issetArma($index)
    {
        return isset($this->arma[$index]);
    }

    /**
     * unset arma
     *
     * Armamentos
     *
     * @param int $index
     * @return void
     */
    public function unsetArma($index)
    {
        unset($this->arma[$index]);
    }

    /**
     * Gets as arma
     *
     * Armamentos
     *
     * @return Prod\Arma[]
     */
    public function getArma()
    {
        return $this->arma;
    }

    /**
     * Sets a new arma
     *
     * Armamentos
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Arma[]
     * $arma
     * @return self
     */
    public function setArma(array $arma)
    {
        $this->arma = $arma;
        return $this;
    }

    /**
     * Gets as comb
     *
     * Informar apenas para operações com combustíveis líquidos
     *
     * @return Prod\Comb
     */
    public function getComb()
    {
        return $this->comb;
    }

    /**
     * Sets a new comb
     *
     * Informar apenas para operações com combustíveis líquidos
     *
     * @param Prod\Comb $comb
     * @return self
     */
    public function setComb(Prod\Comb $comb)
    {
        $this->comb = $comb;
        return $this;
    }

    /**
     * Gets as nRECOPI
     *
     * Número do RECOPI
     *
     * @return string
     */
    public function getNRECOPI()
    {
        return $this->nRECOPI;
    }

    /**
     * Sets a new nRECOPI
     *
     * Número do RECOPI
     *
     * @param string $nRECOPI
     * @return self
     */
    public function setNRECOPI($nRECOPI)
    {
        $this->nRECOPI = $nRECOPI;
        return $this;
    }


}

