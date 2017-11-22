<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing ICMS
 */
class ICMS extends AbstractJsonSerializable
{

    /**
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00
     * $ICMS00
     */
    protected $ICMS00 = null;

    /**
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
     * $ICMS10
     */
    protected $ICMS10 = null;

    /**
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
     * $ICMS20
     */
    protected $ICMS20 = null;

    /**
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30
     * $ICMS30
     */
    protected $ICMS30 = null;

    /**
     * Tributação pelo ICMS
     * 40 - Isenta
     * 41 - Não tributada
     * 50 - Suspensão
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40
     * $ICMS40
     */
    protected $ICMS40 = null;

    /**
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51
     * $ICMS51
     */
    protected $ICMS51 = null;

    /**
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
     * $ICMS60
     */
    protected $ICMS60 = null;

    /**
     * Tributação pelo ICMS
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70
     * $ICMS70
     */
    protected $ICMS70 = null;

    /**
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
     * $ICMS90
     */
    protected $ICMS90 = null;

    /**
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart
     * $ICMSPart
     */
    protected $ICMSPart = null;

    /**
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST
     * $ICMSST
     */
    protected $ICMSST = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
     * $ICMSSN101
     */
    protected $ICMSSN101 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
     * $ICMSSN102
     */
    protected $ICMSSN102 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
     * $ICMSSN201
     */
    protected $ICMSSN201 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
     * $ICMSSN202
     */
    protected $ICMSSN202 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
     * $ICMSSN500
     */
    protected $ICMSSN500 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
     * $ICMSSN900
     */
    protected $ICMSSN900 = null;

    /**
     * Gets as ICMS00
     *
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00
     */
    public function getICMS00()
    {
        return $this->ICMS00;
    }

	/**
	 * Sets a new ICMS00
	 *
	 * Tributação pelo ICMS
	 * 00 - Tributada integralmente
	 *
	 * @param ICMS\ICMS00 $ICMS00
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00
	 * $ICMS00
	 */
    public function setICMS00(ICMS\ICMS00 $ICMS00)
    {
        $this->ICMS00 = $ICMS00;
        return $this;
    }

    /**
     * Gets as ICMS10
     *
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
     */
    public function getICMS10()
    {
        return $this->ICMS10;
    }

	/**
	 * Sets a new ICMS10
	 *
	 * Tributação pelo ICMS
	 * 10 - Tributada e com cobrança do ICMS por substituição tributária
	 *
	 * @param ICMS\ICMS10 $ICMS10
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
	 * $ICMS10
	 */
    public function setICMS10(ICMS\ICMS10 $ICMS10)
    {
        $this->ICMS10 = $ICMS10;
        return $this;
    }

    /**
     * Gets as ICMS20
     *
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
     */
    public function getICMS20()
    {
        return $this->ICMS20;
    }

	/**
	 * Sets a new ICMS20
	 *
	 * Tributção pelo ICMS
	 * 20 - Com redução de base de cálculo
	 *
	 * @param ICMS\ICMS20 $ICMS20
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
	 * $ICMS20
	 */
    public function setICMS20(ICMS\ICMS20 $ICMS20)
    {
        $this->ICMS20 = $ICMS20;
        return $this;
    }

    /**
     * Gets as ICMS30
     *
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30
     */
    public function getICMS30()
    {
        return $this->ICMS30;
    }

	/**
	 * Sets a new ICMS30
	 *
	 * Tributação pelo ICMS
	 * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
	 * tributária
	 *
	 * @param ICMS\ICMS30 $ICMS30
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30
	 * $ICMS30
	 */
    public function setICMS30(ICMS\ICMS30 $ICMS30)
    {
        $this->ICMS30 = $ICMS30;
        return $this;
    }

    /**
     * Gets as ICMS40
     *
     * Tributação pelo ICMS
     * 40 - Isenta
     * 41 - Não tributada
     * 50 - Suspensão
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40
     */
    public function getICMS40()
    {
        return $this->ICMS40;
    }

	/**
	 * Sets a new ICMS40
	 *
	 * Tributação pelo ICMS
	 * 40 - Isenta
	 * 41 - Não tributada
	 * 50 - Suspensão
	 *
	 * @param ICMS\ICMS40 $ICMS40
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40
	 * $ICMS40
	 */
    public function setICMS40(ICMS\ICMS40 $ICMS40)
    {
        $this->ICMS40 = $ICMS40;
        return $this;
    }

    /**
     * Gets as ICMS51
     *
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51
     */
    public function getICMS51()
    {
        return $this->ICMS51;
    }

	/**
	 * Sets a new ICMS51
	 *
	 * Tributção pelo ICMS
	 * 51 - Diferimento
	 * A exigência do preenchimento das informações do ICMS diferido fica à
	 * critério de cada UF.
	 *
	 * @param ICMS\ICMS51 $ICMS51
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51
	 * $ICMS51
	 */
    public function setICMS51(ICMS\ICMS51 $ICMS51)
    {
        $this->ICMS51 = $ICMS51;
        return $this;
    }

    /**
     * Gets as ICMS60
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
     */
    public function getICMS60()
    {
        return $this->ICMS60;
    }

	/**
	 * Sets a new ICMS60
	 *
	 * Tributação pelo ICMS
	 * 60 - ICMS cobrado anteriormente por substituição tributária
	 *
	 * @param ICMS\ICMS60 $ICMS60
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
	 * $ICMS60
	 */
    public function setICMS60(ICMS\ICMS60 $ICMS60)
    {
        $this->ICMS60 = $ICMS60;
        return $this;
    }

    /**
     * Gets as ICMS70
     *
     * Tributação pelo ICMS
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70
     */
    public function getICMS70()
    {
        return $this->ICMS70;
    }

	/**
	 * Sets a new ICMS70
	 *
	 * Tributação pelo ICMS
	 * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
	 * tributária
	 *
	 * @param ICMS\ICMS70 $ICMS70
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70
	 * $ICMS70
	 */
    public function setICMS70(ICMS\ICMS70 $ICMS70)
    {
        $this->ICMS70 = $ICMS70;
        return $this;
    }

    /**
     * Gets as ICMS90
     *
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
     */
    public function getICMS90()
    {
        return $this->ICMS90;
    }

	/**
	 * Sets a new ICMS90
	 *
	 * Tributação pelo ICMS
	 * 90 - Outras
	 *
	 * @param ICMS\ICMS90 $ICMS90
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
	 * $ICMS90
	 */
    public function setICMS90(ICMS\ICMS90 $ICMS90)
    {
        $this->ICMS90 = $ICMS90;
        return $this;
    }

    /**
     * Gets as ICMSPart
     *
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart
     */
    public function getICMSPart()
    {
        return $this->ICMSPart;
    }

	/**
	 * Sets a new ICMSPart
	 *
	 * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
	 * legislação
	 * Operação interestadual para consumidor final com partilha do ICMS devido na
	 * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
	 * legislação. (Ex. UF da concessionária de entrega do veículos)
	 *
	 * @param ICMS\ICMSPart $ICMSPart
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart
	 * $ICMSPart
	 */
    public function setICMSPart(ICMS\ICMSPart $ICMSPart)
    {
        $this->ICMSPart = $ICMSPart;
        return $this;
    }

    /**
     * Gets as ICMSST
     *
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST
     */
    public function getICMSST()
    {
        return $this->ICMSST;
    }

	/**
	 * Sets a new ICMSST
	 *
	 * Grupo de informação do ICMSST devido para a UF de destino, nas operações
	 * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
	 * UF do remetente. Repasse via Substituto Tributário.
	 *
	 * @param ICMS\ICMSST $ICMSST
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST
	 * $ICMSST
	 */
    public function setICMSST(ICMS\ICMSST $ICMSST)
    {
        $this->ICMSST = $ICMSST;
        return $this;
    }

    /**
     * Gets as ICMSSN101
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
     */
    public function getICMSSN101()
    {
        return $this->ICMSSN101;
    }

	/**
	 * Sets a new ICMSSN101
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
	 *
	 * @param ICMS\ICMSSN101 $ICMSSN101
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
	 * $ICMSSN101
	 */
    public function setICMSSN101(ICMS\ICMSSN101 $ICMSSN101)
    {
        $this->ICMSSN101 = $ICMSSN101;
        return $this;
    }

    /**
     * Gets as ICMSSN102
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
     */
    public function getICMSSN102()
    {
        return $this->ICMSSN102;
    }

	/**
	 * Sets a new ICMSSN102
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
	 *
	 * @param ICMS\ICMSSN102 $ICMSSN102
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
	 * $ICMSSN102
	 */
    public function setICMSSN102(ICMS\ICMSSN102 $ICMSSN102)
    {
        $this->ICMSSN102 = $ICMSSN102;
        return $this;
    }

    /**
     * Gets as ICMSSN201
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
     */
    public function getICMSSN201()
    {
        return $this->ICMSSN201;
    }

	/**
	 * Sets a new ICMSSN201
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
	 *
	 * @param ICMS\ICMSSN201 $ICMSSN201
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
	 * $ICMSSN201
	 */
    public function setICMSSN201(ICMS\ICMSSN201 $ICMSSN201)
    {
        $this->ICMSSN201 = $ICMSSN201;
        return $this;
    }

    /**
     * Gets as ICMSSN202
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
     */
    public function getICMSSN202()
    {
        return $this->ICMSSN202;
    }

	/**
	 * Sets a new ICMSSN202
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
	 *
	 * @param ICMS\ICMSSN202 $ICMSSN202
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
	 * $ICMSSN202
	 */
    public function setICMSSN202(ICMS\ICMSSN202 $ICMSSN202)
    {
        $this->ICMSSN202 = $ICMSSN202;
        return $this;
    }

    /**
     * Gets as ICMSSN500
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
     */
    public function getICMSSN500()
    {
        return $this->ICMSSN500;
    }

	/**
	 * Sets a new ICMSSN500
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
	 * CSOSN=500 (v.2.0)
	 *
	 * @param ICMS\ICMSSN500 $ICMSSN500
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
	 * $ICMSSN500
	 */
    public function setICMSSN500(ICMS\ICMSSN500 $ICMSSN500)
    {
        $this->ICMSSN500 = $ICMSSN500;
        return $this;
    }

    /**
     * Gets as ICMSSN900
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
     */
    public function getICMSSN900()
    {
        return $this->ICMSSN900;
    }

	/**
	 * Sets a new ICMSSN900
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
	 * CSOSN=900 (v2.0)
	 *
	 * @param ICMS\ICMSSN900 $ICMSSN900
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
	 * $ICMSSN900
	 */
    public function setICMSSN900(ICMS\ICMSSN900 $ICMSSN900)
    {
        $this->ICMSSN900 = $ICMSSN900;
        return $this;
    }


}

