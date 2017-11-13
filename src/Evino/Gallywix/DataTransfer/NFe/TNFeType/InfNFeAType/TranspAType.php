<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType;

/**
 * Class representing TranspAType
 */
class TranspAType
{

    /**
     * Modalidade do frete
     * 0- Contratação do Frete por conta do Remetente (CIF);
     * 1- Contratação do Frete por conta do destinatário/remetente (FOB);
     * 2- Contratação do Frete por conta de terceiros;
     * 3- Transporte próprio por conta do remetente;
     * 4- Transporte próprio por conta do destinatário;
     * 9- Sem Ocorrência de transporte.
     *
     * @property string $modFrete
     */
    private $modFrete = null;

    /**
     * Dados do transportador
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\TransportaAType
     * $transporta
     */
    private $transporta = null;

    /**
     * Dados da retenção ICMS do Transporte
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\RetTranspAType
     * $retTransp
     */
    private $retTransp = null;

    /**
     * Dados do veículo
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType $veicTransp
     */
    private $veicTransp = null;

    /**
     * Dados do reboque/Dolly (v2.0)
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType[] $reboque
     */
    private $reboque = array(

    );

    /**
     * Identificação do vagão (v2.0)
     *
     * @property string $vagao
     */
    private $vagao = null;

    /**
     * Identificação da balsa (v2.0)
     *
     * @property string $balsa
     */
    private $balsa = null;

    /**
     * Dados dos volumes
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\VolAType[] $vol
     */
    private $vol = array(

    );

    /**
     * Gets as modFrete
     *
     * Modalidade do frete
     * 0- Contratação do Frete por conta do Remetente (CIF);
     * 1- Contratação do Frete por conta do destinatário/remetente (FOB);
     * 2- Contratação do Frete por conta de terceiros;
     * 3- Transporte próprio por conta do remetente;
     * 4- Transporte próprio por conta do destinatário;
     * 9- Sem Ocorrência de transporte.
     *
     * @return string
     */
    public function getModFrete()
    {
        return $this->modFrete;
    }

    /**
     * Sets a new modFrete
     *
     * Modalidade do frete
     * 0- Contratação do Frete por conta do Remetente (CIF);
     * 1- Contratação do Frete por conta do destinatário/remetente (FOB);
     * 2- Contratação do Frete por conta de terceiros;
     * 3- Transporte próprio por conta do remetente;
     * 4- Transporte próprio por conta do destinatário;
     * 9- Sem Ocorrência de transporte.
     *
     * @param string $modFrete
     * @return self
     */
    public function setModFrete($modFrete)
    {
        $this->modFrete = $modFrete;
        return $this;
    }

    /**
     * Gets as transporta
     *
     * Dados do transportador
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\TransportaAType
     */
    public function getTransporta()
    {
        return $this->transporta;
    }

    /**
     * Sets a new transporta
     *
     * Dados do transportador
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\TransportaAType
     * $transporta
     * @return self
     */
    public function setTransporta(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\TransportaAType $transporta)
    {
        $this->transporta = $transporta;
        return $this;
    }

    /**
     * Gets as retTransp
     *
     * Dados da retenção ICMS do Transporte
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\RetTranspAType
     */
    public function getRetTransp()
    {
        return $this->retTransp;
    }

    /**
     * Sets a new retTransp
     *
     * Dados da retenção ICMS do Transporte
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\RetTranspAType
     * $retTransp
     * @return self
     */
    public function setRetTransp(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\RetTranspAType $retTransp)
    {
        $this->retTransp = $retTransp;
        return $this;
    }

    /**
     * Gets as veicTransp
     *
     * Dados do veículo
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType
     */
    public function getVeicTransp()
    {
        return $this->veicTransp;
    }

    /**
     * Sets a new veicTransp
     *
     * Dados do veículo
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType $veicTransp
     * @return self
     */
    public function setVeicTransp(\Evino\Gallywix\DataTransfer\Nfe\TVeiculoType $veicTransp)
    {
        $this->veicTransp = $veicTransp;
        return $this;
    }

    /**
     * Adds as reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType $reboque
     */
    public function addToReboque(\Evino\Gallywix\DataTransfer\Nfe\TVeiculoType $reboque)
    {
        $this->reboque[] = $reboque;
        return $this;
    }

    /**
     * isset reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReboque($index)
    {
        return isset($this->reboque[$index]);
    }

    /**
     * unset reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReboque($index)
    {
        unset($this->reboque[$index]);
    }

    /**
     * Gets as reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType[]
     */
    public function getReboque()
    {
        return $this->reboque;
    }

    /**
     * Sets a new reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TVeiculoType[] $reboque
     * @return self
     */
    public function setReboque(array $reboque)
    {
        $this->reboque = $reboque;
        return $this;
    }

    /**
     * Gets as vagao
     *
     * Identificação do vagão (v2.0)
     *
     * @return string
     */
    public function getVagao()
    {
        return $this->vagao;
    }

    /**
     * Sets a new vagao
     *
     * Identificação do vagão (v2.0)
     *
     * @param string $vagao
     * @return self
     */
    public function setVagao($vagao)
    {
        $this->vagao = $vagao;
        return $this;
    }

    /**
     * Gets as balsa
     *
     * Identificação da balsa (v2.0)
     *
     * @return string
     */
    public function getBalsa()
    {
        return $this->balsa;
    }

    /**
     * Sets a new balsa
     *
     * Identificação da balsa (v2.0)
     *
     * @param string $balsa
     * @return self
     */
    public function setBalsa($balsa)
    {
        $this->balsa = $balsa;
        return $this;
    }

    /**
     * Adds as vol
     *
     * Dados dos volumes
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\VolAType $vol
     */
    public function addToVol(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\VolAType $vol)
    {
        $this->vol[] = $vol;
        return $this;
    }

    /**
     * isset vol
     *
     * Dados dos volumes
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVol($index)
    {
        return isset($this->vol[$index]);
    }

    /**
     * unset vol
     *
     * Dados dos volumes
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVol($index)
    {
        unset($this->vol[$index]);
    }

    /**
     * Gets as vol
     *
     * Dados dos volumes
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\VolAType[]
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Sets a new vol
     *
     * Dados dos volumes
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\TranspAType\VolAType[] $vol
     * @return self
     */
    public function setVol(array $vol)
    {
        $this->vol = $vol;
        return $this;
    }


}

