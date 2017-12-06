<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Nfe\TVeiculo;

/**
 * Class representing Transp
 */
class Transp extends BaseGallywixDataTransfer
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
    protected $modFrete = null;

    /**
     * Dados do transportador
     *
     * @property Transp\Transporta
     * $transporta
     */
    protected $transporta = null;

    /**
     * Dados da retenção ICMS do Transporte
     *
     * @property Transp\RetTransp
     * $retTransp
     */
    protected $retTransp = null;

    /**
     * Dados do veículo
     *
     * @property TVeiculo $veicTransp
     */
    protected $veicTransp = null;

    /**
     * Dados do reboque/Dolly (v2.0)
     *
     * @property TVeiculo[] $reboque
     */
    protected $reboque = array();

    /**
     * Identificação do vagão (v2.0)
     *
     * @property string $vagao
     */
    protected $vagao = null;

    /**
     * Identificação da balsa (v2.0)
     *
     * @property string $balsa
     */
    protected $balsa = null;

    /**
     * Dados dos volumes
     *
     * @property Transp\Vol[] $vol
     */
    protected $vol = array();

    /**
     * @return null|\stdClass
     */
    public function getTagReboque()
    {
        if (count($this->getReboque()) == 0) {
            return null;
        }

        $tag = $this->getReboque()[0]->toNFeTag();

        if (!is_null($this->getVagao())) {
            $tag->vagao = $this->getVagao();
        }

        if (!is_null($this->getBalsa())) {
            $tag->balsa = $this->getBalsa();
        }

        return $tag;
    }

    /**
     * @return array|null
     */
    public function getTagsVol()
    {
        if (count($this->getVol()) == 0) {
            return null;
        }

        $tags = array();
        foreach ($this->getVol() as $vol) {
            $tags[] = $vol->toNFeTag();
        }

        return $tags;
    }

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
     * @return Transp\Transporta
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Transp\Transporta
     * $transporta
     * @return self
     */
    public function setTransporta(Transp\Transporta $transporta)
    {
        $this->transporta = $transporta;
        return $this;
    }

    /**
     * Gets as retTransp
     *
     * Dados da retenção ICMS do Transporte
     *
     * @return Transp\RetTransp
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
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Transp\RetTransp
     * $retTransp
     * @return self
     */
    public function setRetTransp(Transp\RetTransp $retTransp)
    {
        $this->retTransp = $retTransp;
        return $this;
    }

    /**
     * Gets as veicTransp
     *
     * Dados do veículo
     *
     * @return TVeiculo
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
     * @param TVeiculo $veicTransp
     * @return self
     */
    public function setVeicTransp(TVeiculo $veicTransp)
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
     * @param TVeiculo $reboque
     */
    public function addToReboque(TVeiculo $reboque)
    {
        $this->reboque[] = $reboque;
        return $this;
    }

    /**
     * isset reboque
     *
     * Dados do reboque/Dolly (v2.0)
     *
     * @param int $index
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
     * @param int $index
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
     * @return TVeiculo[]
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
     * @param TVeiculo[] $reboque
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
     * @param Transp\Vol $vol
     */
    public function addToVol(Transp\Vol $vol)
    {
        $this->vol[] = $vol;
        return $this;
    }

    /**
     * isset vol
     *
     * Dados dos volumes
     *
     * @param int $index
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
     * @param int $index
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
     * @return Transp\Vol[]
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
     * @param Transp\Vol[] $vol
     * @return self
     */
    public function setVol(array $vol)
    {
        $this->vol = $vol;
        return $this;
    }


}

