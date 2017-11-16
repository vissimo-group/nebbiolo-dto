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
     * $iCMS00
     */
    protected $iCMS00 = null;

    /**
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
     * $iCMS10
     */
    protected $iCMS10 = null;

    /**
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
     * $iCMS20
     */
    protected $iCMS20 = null;

    /**
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30
     * $iCMS30
     */
    protected $iCMS30 = null;

    /**
     * Tributação pelo ICMS
     * 40 - Isenta
     * 41 - Não tributada
     * 50 - Suspensão
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40
     * $iCMS40
     */
    protected $iCMS40 = null;

    /**
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51
     * $iCMS51
     */
    protected $iCMS51 = null;

    /**
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
     * $iCMS60
     */
    protected $iCMS60 = null;

    /**
     * Tributação pelo ICMS
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70
     * $iCMS70
     */
    protected $iCMS70 = null;

    /**
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
     * $iCMS90
     */
    protected $iCMS90 = null;

    /**
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart
     * $iCMSPart
     */
    protected $iCMSPart = null;

    /**
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST
     * $iCMSST
     */
    protected $iCMSST = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
     * $iCMSSN101
     */
    protected $iCMSSN101 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
     * $iCMSSN102
     */
    protected $iCMSSN102 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
     * $iCMSSN201
     */
    protected $iCMSSN201 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
     * $iCMSSN202
     */
    protected $iCMSSN202 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
     * $iCMSSN500
     */
    protected $iCMSSN500 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
     * $iCMSSN900
     */
    protected $iCMSSN900 = null;

    /**
     * Gets as iCMS00
     *
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00
     */
    public function getICMS00()
    {
        return $this->iCMS00;
    }

	/**
	 * Sets a new iCMS00
	 *
	 * Tributação pelo ICMS
	 * 00 - Tributada integralmente
	 *
	 * @param ICMS\ICMS00 $iCMS00
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00
	 * $iCMS00
	 */
    public function setICMS00(ICMS\ICMS00 $iCMS00)
    {
        $this->iCMS00 = $iCMS00;
        return $this;
    }

    /**
     * Gets as iCMS10
     *
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
     */
    public function getICMS10()
    {
        return $this->iCMS10;
    }

	/**
	 * Sets a new iCMS10
	 *
	 * Tributação pelo ICMS
	 * 10 - Tributada e com cobrança do ICMS por substituição tributária
	 *
	 * @param ICMS\ICMS10 $iCMS10
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10
	 * $iCMS10
	 */
    public function setICMS10(ICMS\ICMS10 $iCMS10)
    {
        $this->iCMS10 = $iCMS10;
        return $this;
    }

    /**
     * Gets as iCMS20
     *
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
     */
    public function getICMS20()
    {
        return $this->iCMS20;
    }

	/**
	 * Sets a new iCMS20
	 *
	 * Tributção pelo ICMS
	 * 20 - Com redução de base de cálculo
	 *
	 * @param ICMS\ICMS20 $iCMS20
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20
	 * $iCMS20
	 */
    public function setICMS20(ICMS\ICMS20 $iCMS20)
    {
        $this->iCMS20 = $iCMS20;
        return $this;
    }

    /**
     * Gets as iCMS30
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
        return $this->iCMS30;
    }

	/**
	 * Sets a new iCMS30
	 *
	 * Tributação pelo ICMS
	 * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
	 * tributária
	 *
	 * @param ICMS\ICMS30 $iCMS30
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30
	 * $iCMS30
	 */
    public function setICMS30(ICMS\ICMS30 $iCMS30)
    {
        $this->iCMS30 = $iCMS30;
        return $this;
    }

    /**
     * Gets as iCMS40
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
        return $this->iCMS40;
    }

	/**
	 * Sets a new iCMS40
	 *
	 * Tributação pelo ICMS
	 * 40 - Isenta
	 * 41 - Não tributada
	 * 50 - Suspensão
	 *
	 * @param ICMS\ICMS40 $iCMS40
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40
	 * $iCMS40
	 */
    public function setICMS40(ICMS\ICMS40 $iCMS40)
    {
        $this->iCMS40 = $iCMS40;
        return $this;
    }

    /**
     * Gets as iCMS51
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
        return $this->iCMS51;
    }

	/**
	 * Sets a new iCMS51
	 *
	 * Tributção pelo ICMS
	 * 51 - Diferimento
	 * A exigência do preenchimento das informações do ICMS diferido fica à
	 * critério de cada UF.
	 *
	 * @param ICMS\ICMS51 $iCMS51
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51
	 * $iCMS51
	 */
    public function setICMS51(ICMS\ICMS51 $iCMS51)
    {
        $this->iCMS51 = $iCMS51;
        return $this;
    }

    /**
     * Gets as iCMS60
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
     */
    public function getICMS60()
    {
        return $this->iCMS60;
    }

	/**
	 * Sets a new iCMS60
	 *
	 * Tributação pelo ICMS
	 * 60 - ICMS cobrado anteriormente por substituição tributária
	 *
	 * @param ICMS\ICMS60 $iCMS60
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60
	 * $iCMS60
	 */
    public function setICMS60(ICMS\ICMS60 $iCMS60)
    {
        $this->iCMS60 = $iCMS60;
        return $this;
    }

    /**
     * Gets as iCMS70
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
        return $this->iCMS70;
    }

	/**
	 * Sets a new iCMS70
	 *
	 * Tributação pelo ICMS
	 * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
	 * tributária
	 *
	 * @param ICMS\ICMS70 $iCMS70
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70
	 * $iCMS70
	 */
    public function setICMS70(ICMS\ICMS70 $iCMS70)
    {
        $this->iCMS70 = $iCMS70;
        return $this;
    }

    /**
     * Gets as iCMS90
     *
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
     */
    public function getICMS90()
    {
        return $this->iCMS90;
    }

	/**
	 * Sets a new iCMS90
	 *
	 * Tributação pelo ICMS
	 * 90 - Outras
	 *
	 * @param ICMS\ICMS90 $iCMS90
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90
	 * $iCMS90
	 */
    public function setICMS90(ICMS\ICMS90 $iCMS90)
    {
        $this->iCMS90 = $iCMS90;
        return $this;
    }

    /**
     * Gets as iCMSPart
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
        return $this->iCMSPart;
    }

	/**
	 * Sets a new iCMSPart
	 *
	 * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
	 * legislação
	 * Operação interestadual para consumidor final com partilha do ICMS devido na
	 * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
	 * legislação. (Ex. UF da concessionária de entrega do veículos)
	 *
	 * @param ICMS\ICMSPart $iCMSPart
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart
	 * $iCMSPart
	 */
    public function setICMSPart(ICMS\ICMSPart $iCMSPart)
    {
        $this->iCMSPart = $iCMSPart;
        return $this;
    }

    /**
     * Gets as iCMSST
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
        return $this->iCMSST;
    }

	/**
	 * Sets a new iCMSST
	 *
	 * Grupo de informação do ICMSST devido para a UF de destino, nas operações
	 * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
	 * UF do remetente. Repasse via Substituto Tributário.
	 *
	 * @param ICMS\ICMSST $iCMSST
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST
	 * $iCMSST
	 */
    public function setICMSST(ICMS\ICMSST $iCMSST)
    {
        $this->iCMSST = $iCMSST;
        return $this;
    }

    /**
     * Gets as iCMSSN101
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
     */
    public function getICMSSN101()
    {
        return $this->iCMSSN101;
    }

	/**
	 * Sets a new iCMSSN101
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
	 *
	 * @param ICMS\ICMSSN101 $iCMSSN101
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101
	 * $iCMSSN101
	 */
    public function setICMSSN101(ICMS\ICMSSN101 $iCMSSN101)
    {
        $this->iCMSSN101 = $iCMSSN101;
        return $this;
    }

    /**
     * Gets as iCMSSN102
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
     */
    public function getICMSSN102()
    {
        return $this->iCMSSN102;
    }

	/**
	 * Sets a new iCMSSN102
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
	 *
	 * @param ICMS\ICMSSN102 $iCMSSN102
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102
	 * $iCMSSN102
	 */
    public function setICMSSN102(ICMS\ICMSSN102 $iCMSSN102)
    {
        $this->iCMSSN102 = $iCMSSN102;
        return $this;
    }

    /**
     * Gets as iCMSSN201
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
     */
    public function getICMSSN201()
    {
        return $this->iCMSSN201;
    }

	/**
	 * Sets a new iCMSSN201
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
	 *
	 * @param ICMS\ICMSSN201 $iCMSSN201
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201
	 * $iCMSSN201
	 */
    public function setICMSSN201(ICMS\ICMSSN201 $iCMSSN201)
    {
        $this->iCMSSN201 = $iCMSSN201;
        return $this;
    }

    /**
     * Gets as iCMSSN202
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
     */
    public function getICMSSN202()
    {
        return $this->iCMSSN202;
    }

	/**
	 * Sets a new iCMSSN202
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
	 *
	 * @param ICMS\ICMSSN202 $iCMSSN202
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202
	 * $iCMSSN202
	 */
    public function setICMSSN202(ICMS\ICMSSN202 $iCMSSN202)
    {
        $this->iCMSSN202 = $iCMSSN202;
        return $this;
    }

    /**
     * Gets as iCMSSN500
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
     */
    public function getICMSSN500()
    {
        return $this->iCMSSN500;
    }

	/**
	 * Sets a new iCMSSN500
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
	 * CSOSN=500 (v.2.0)
	 *
	 * @param ICMS\ICMSSN500 $iCMSSN500
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500
	 * $iCMSSN500
	 */
    public function setICMSSN500(ICMS\ICMSSN500 $iCMSSN500)
    {
        $this->iCMSSN500 = $iCMSSN500;
        return $this;
    }

    /**
     * Gets as iCMSSN900
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
     */
    public function getICMSSN900()
    {
        return $this->iCMSSN900;
    }

	/**
	 * Sets a new iCMSSN900
	 *
	 * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
	 * CSOSN=900 (v2.0)
	 *
	 * @param ICMS\ICMSSN900 $iCMSSN900
	 * @return ICMS
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900
	 * $iCMSSN900
	 */
    public function setICMSSN900(ICMS\ICMSSN900 $iCMSSN900)
    {
        $this->iCMSSN900 = $iCMSSN900;
        return $this;
    }


}

