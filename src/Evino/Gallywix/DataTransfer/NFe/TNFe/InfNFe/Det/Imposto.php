<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det;

/**
 * Class representing Imposto
 */
class Imposto
{

    /**
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @property string $vTotTrib
     */
    private $vTotTrib = null;

    /**
     * Dados do ICMS Normal e ST
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS
     * $iCMS
     */
    private $iCMS = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\TIpi $iPI
     */
    private $iPI = null;

    /**
     * Dados do Imposto de Importação
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\II
     * $iI
     */
    private $iI = null;

    /**
     * ISSQN
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN $iSSQN
     */
    private $iSSQN = null;

    /**
     * Dados do PIS
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS
     * $pIS
     */
    private $pIS = null;

    /**
     * Dados do PIS Substituição Tributária
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST $pISST
     */
    private $pISST = null;

    /**
     * Dados do COFINS
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS $cOFINS
     */
    private $cOFINS = null;

    /**
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
     * $cOFINSST
     */
    private $cOFINSST = null;

    /**
     * Grupo a ser informado nas vendas interestarduais para consumidor final, não
     * contribuinte de ICMS
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
     * $iCMSUFDest
     */
    private $iCMSUFDest = null;

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
     * Gets as iCMS
     *
     * Dados do ICMS Normal e ST
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS
     */
    public function getICMS()
    {
        return $this->iCMS;
    }

    /**
     * Sets a new iCMS
     *
     * Dados do ICMS Normal e ST
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS
     * $iCMS
     * @return self
     */
    public function setICMS(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS $iCMS)
    {
        $this->iCMS = $iCMS;
        return $this;
    }

    /**
     * Gets as iPI
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TIpi
     */
    public function getIPI()
    {
        return $this->iPI;
    }

    /**
     * Sets a new iPI
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TIpi $iPI
     * @return self
     */
    public function setIPI(\Evino\Gallywix\DataTransfer\Nfe\TIpi $iPI)
    {
        $this->iPI = $iPI;
        return $this;
    }

    /**
     * Gets as iI
     *
     * Dados do Imposto de Importação
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\II
     */
    public function getII()
    {
        return $this->iI;
    }

    /**
     * Sets a new iI
     *
     * Dados do Imposto de Importação
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\II $iI
     * @return self
     */
    public function setII(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\II $iI)
    {
        $this->iI = $iI;
        return $this;
    }

    /**
     * Gets as iSSQN
     *
     * ISSQN
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN
     */
    public function getISSQN()
    {
        return $this->iSSQN;
    }

    /**
     * Sets a new iSSQN
     *
     * ISSQN
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN
     * $iSSQN
     * @return self
     */
    public function setISSQN(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ISSQN $iSSQN)
    {
        $this->iSSQN = $iSSQN;
        return $this;
    }

    /**
     * Gets as pIS
     *
     * Dados do PIS
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS
     */
    public function getPIS()
    {
        return $this->pIS;
    }

    /**
     * Sets a new pIS
     *
     * Dados do PIS
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS
     * $pIS
     * @return self
     */
    public function setPIS(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS $pIS)
    {
        $this->pIS = $pIS;
        return $this;
    }

    /**
     * Gets as pISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST
     */
    public function getPISST()
    {
        return $this->pISST;
    }

    /**
     * Sets a new pISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST
     * $pISST
     * @return self
     */
    public function setPISST(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PISST $pISST)
    {
        $this->pISST = $pISST;
        return $this;
    }

    /**
     * Gets as cOFINS
     *
     * Dados do COFINS
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS
     */
    public function getCOFINS()
    {
        return $this->cOFINS;
    }

    /**
     * Sets a new cOFINS
     *
     * Dados do COFINS
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS
     * $cOFINS
     * @return self
     */
    public function setCOFINS(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINS $cOFINS)
    {
        $this->cOFINS = $cOFINS;
        return $this;
    }

    /**
     * Gets as cOFINSST
     *
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
     */
    public function getCOFINSST()
    {
        return $this->cOFINSST;
    }

    /**
     * Sets a new cOFINSST
     *
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST
     * $cOFINSST
     * @return self
     */
    public function setCOFINSST(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\COFINSST $cOFINSST)
    {
        $this->cOFINSST = $cOFINSST;
        return $this;
    }

    /**
     * Gets as iCMSUFDest
     *
     * Grupo a ser informado nas vendas interestarduais para consumidor final, não
     * contribuinte de ICMS
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
     */
    public function getICMSUFDest()
    {
        return $this->iCMSUFDest;
    }

    /**
     * Sets a new iCMSUFDest
     *
     * Grupo a ser informado nas vendas interestarduais para consumidor final, não
     * contribuinte de ICMS
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest
     * $iCMSUFDest
     * @return self
     */
    public function setICMSUFDest(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMSUFDest $iCMSUFDest)
    {
        $this->iCMSUFDest = $iCMSUFDest;
        return $this;
    }


}

