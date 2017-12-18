<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Transp\Vol;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Lacres
 */
class Lacres extends BaseDataTransfer
{

    /**
     * Número dos Lacres
     *
     * @property string $nLacre
     */
    protected $nLacre = null;

    /**
     * Gets as nLacre
     *
     * Número dos Lacres
     *
     * @return string
     */
    public function getNLacre()
    {
        return $this->nLacre;
    }

    /**
     * Sets a new nLacre
     *
     * Número dos Lacres
     *
     * @param string $nLacre
     * @return self
     */
    public function setNLacre($nLacre)
    {
        $this->nLacre = $nLacre;
        return $this;
    }


}

