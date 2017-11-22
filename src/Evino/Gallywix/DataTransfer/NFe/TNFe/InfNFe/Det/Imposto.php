<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;
use Evino\Gallywix\DataTransfer\Nfe\TIpi;

/**
 * Class representing Imposto
 */
class Imposto extends AbstractJsonSerializable
{

    /**
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @property string $vTotTrib
     */
    protected $vTotTrib = null;

    /**
     * Dados do ICMS Normal e ST
     *
     * @property Imposto\ICMS
     * $ICMS
     */
    protected $ICMS = null;

    /**
     * @property TIpi $IPI
     */
    protected $IPI = null;

    /**
     * Dados do Imposto de Importação
     *
     * @property Imposto\II
     * $II
     */
    protected $II = null;

    /**
     * ISSQN
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN $ISSQN
     */
    protected $ISSQN = null;

    /**
     * Dados do PIS
     *
     * @property Imposto\PIS
     * $PIS
     */
    protected $PIS = null;

    /**
     * Dados do PIS Substituição Tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST $PISST
     */
    protected $PISST = null;

    /**
     * Dados do COFINS
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS $COFINS
     */
    protected $COFINS = null;

    /**
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
     * $COFINSST
     */
    protected $COFINSST = null;

    /**
     * Grupo a ser informado nas vendas interestarduais para consumidor final, não
     * contribuinte de ICMS
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
     * $ICMSUFDest
     */
    protected $ICMSUFDest = null;

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

    /**
     * Gets as ICMS
     *
     * Dados do ICMS Normal e ST
     *
     * @return Imposto\ICMS
     */
    public function getICMS()
    {
        return $this->ICMS;
    }

    /**
     * Sets a new ICMS
     *
     * Dados do ICMS Normal e ST
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS
     * $ICMS
     * @return self
     */
    public function setICMS(Imposto\ICMS $ICMS)
    {
        $this->ICMS = $ICMS;
        return $this;
    }

    /**
     * Gets as IPI
     *
     * @return TIpi
     */
    public function getIPI()
    {
        return $this->IPI;
    }

    /**
     * Sets a new IPI
     *
     * @param TIpi $IPI
     * @return self
     */
    public function setIPI(TIpi $IPI)
    {
        $this->IPI = $IPI;
        return $this;
    }

    /**
     * Gets as II
     *
     * Dados do Imposto de Importação
     *
     * @return Imposto\II
     */
    public function getII()
    {
        return $this->II;
    }

    /**
     * Sets a new II
     *
     * Dados do Imposto de Importação
     *
     * @param Imposto\II $II
     * @return self
     */
    public function setII(Imposto\II $II)
    {
        $this->II = $II;
        return $this;
    }

    /**
     * Gets as ISSQN
     *
     * ISSQN
     *
     * @return Imposto\ISSQN
     */
    public function getISSQN()
    {
        return $this->ISSQN;
    }

    /**
     * Sets a new ISSQN
     *
     * ISSQN
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN
     * $ISSQN
     * @return self
     */
    public function setISSQN(Imposto\ISSQN $ISSQN)
    {
        $this->ISSQN = $ISSQN;
        return $this;
    }

    /**
     * Gets as PIS
     *
     * Dados do PIS
     *
     * @return Imposto\PIS
     */
    public function getPIS()
    {
        return $this->PIS;
    }

    /**
     * Sets a new PIS
     *
     * Dados do PIS
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS
     * $PIS
     * @return self
     */
    public function setPIS(Imposto\PIS $PIS)
    {
        $this->PIS = $PIS;
        return $this;
    }

    /**
     * Gets as PISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @return Imposto\PISST
     */
    public function getPISST()
    {
        return $this->PISST;
    }

    /**
     * Sets a new PISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST
     * $PISST
     * @return self
     */
    public function setPISST(Imposto\PISST $PISST)
    {
        $this->PISST = $PISST;
        return $this;
    }

    /**
     * Gets as COFINS
     *
     * Dados do COFINS
     *
     * @return Imposto\COFINS
     */
    public function getCOFINS()
    {
        return $this->COFINS;
    }

    /**
     * Sets a new COFINS
     *
     * Dados do COFINS
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS
     * $COFINS
     * @return self
     */
    public function setCOFINS(Imposto\COFINS $COFINS)
    {
        $this->COFINS = $COFINS;
        return $this;
    }

    /**
     * Gets as COFINSST
     *
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
     */
    public function getCOFINSST()
    {
        return $this->COFINSST;
    }

	/**
	 * Sets a new COFINSST
	 *
	 * Dados do COFINS da
	 * Substituição Tributaria;
	 *
	 * @param Imposto\COFINSST $COFINSST
	 * @return Imposto
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
	 * $COFINSST
	 */
    public function setCOFINSST(Imposto\COFINSST $COFINSST)
    {
        $this->COFINSST = $COFINSST;
        return $this;
    }

    /**
     * Gets as ICMSUFDest
     *
     * Grupo a ser informado nas vendas interestarduais para consumidor final, não
     * contribuinte de ICMS
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
     */
    public function getICMSUFDest()
    {
        return $this->ICMSUFDest;
    }

	/**
	 * Sets a new ICMSUFDest
	 *
	 * Grupo a ser informado nas vendas interestarduais para consumidor final, não
	 * contribuinte de ICMS
	 *
	 * @param Imposto\ICMSUFDest $ICMSUFDest
	 * @return Imposto
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
	 * $ICMSUFDest
	 */
    public function setICMSUFDest(Imposto\ICMSUFDest $ICMSUFDest)
    {
        $this->ICMSUFDest = $ICMSUFDest;
        return $this;
    }


}

