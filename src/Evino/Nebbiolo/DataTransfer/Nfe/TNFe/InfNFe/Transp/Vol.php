<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Transp;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Vol
 */
class Vol extends BaseDataTransfer
{
    /**
     * Quantidade de volumes transportados
     *
     * @property string $qVol
     */
    protected $qVol = null;

    /**
     * Espécie dos volumes transportados
     *
     * @property string $esp
     */
    protected $esp = null;

    /**
     * Marca dos volumes transportados
     *
     * @property string $marca
     */
    protected $marca = null;

    /**
     * Numeração dos volumes transportados
     *
     * @property string $nVol
     */
    protected $nVol = null;

    /**
     * Peso líquido (em kg)
     *
     * @property string $pesoL
     */
    protected $pesoL = null;

    /**
     * Peso bruto (em kg)
     *
     * @property string $pesoB
     */
    protected $pesoB = null;

    /**
     * @property Vol\Lacres[] $lacres
     */
    protected $lacres = array();

    /**
     * Gets as qVol
     *
     * Quantidade de volumes transportados
     *
     * @return string
     */
    public function getQVol()
    {
        return $this->qVol;
    }

    /**
     * Sets a new qVol
     *
     * Quantidade de volumes transportados
     *
     * @param string $qVol
     * @return self
     */
    public function setQVol($qVol)
    {
        $this->qVol = $qVol;
        return $this;
    }

    /**
     * Gets as esp
     *
     * Espécie dos volumes transportados
     *
     * @return string
     */
    public function getEsp()
    {
        return $this->esp;
    }

    /**
     * Sets a new esp
     *
     * Espécie dos volumes transportados
     *
     * @param string $esp
     * @return self
     */
    public function setEsp($esp)
    {
        $this->esp = $esp;
        return $this;
    }

    /**
     * Gets as marca
     *
     * Marca dos volumes transportados
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Sets a new marca
     *
     * Marca dos volumes transportados
     *
     * @param string $marca
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * Gets as nVol
     *
     * Numeração dos volumes transportados
     *
     * @return string
     */
    public function getNVol()
    {
        return $this->nVol;
    }

    /**
     * Sets a new nVol
     *
     * Numeração dos volumes transportados
     *
     * @param string $nVol
     * @return self
     */
    public function setNVol($nVol)
    {
        $this->nVol = $nVol;
        return $this;
    }

    /**
     * Gets as pesoL
     *
     * Peso líquido (em kg)
     *
     * @return string
     */
    public function getPesoL()
    {
        return $this->pesoL;
    }

    /**
     * Sets a new pesoL
     *
     * Peso líquido (em kg)
     *
     * @param string $pesoL
     * @return self
     */
    public function setPesoL($pesoL)
    {
        $this->pesoL = $pesoL;
        return $this;
    }

    /**
     * Gets as pesoB
     *
     * Peso bruto (em kg)
     *
     * @return string
     */
    public function getPesoB()
    {
        return $this->pesoB;
    }

    /**
     * Sets a new pesoB
     *
     * Peso bruto (em kg)
     *
     * @param string $pesoB
     * @return self
     */
    public function setPesoB($pesoB)
    {
        $this->pesoB = $pesoB;
        return $this;
    }

    /**
     * Adds as lacres
     *
     * @return self
     * @param Vol\Lacres $lacres
     */
    public function addToLacres(Vol\Lacres $lacres)
    {
        $this->lacres[] = $lacres;
        return $this;
    }

    /**
     * isset lacres
     *
     * @param int $index
     * @return boolean
     */
    public function issetLacres($index)
    {
        return isset($this->lacres[$index]);
    }

    /**
     * unset lacres
     *
     * @param int $index
     * @return void
     */
    public function unsetLacres($index)
    {
        unset($this->lacres[$index]);
    }

    /**
     * Gets as lacres
     * @return array Vol\Lacres[] Vol\Lacres[]
     */
    public function getLacres()
    {
        return $this->lacres;
    }

    /**
     * Sets a new lacres
     *
     * @param Vol\Lacres[] $lacres
     * @return self
     */
    public function setLacres(array $lacres)
    {
        $this->lacres = $lacres;
        return $this;
    }
}
