<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Transp\Vol;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing Lacres
 */
class Lacres extends AbstractJsonSerializable
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

