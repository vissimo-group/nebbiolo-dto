<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing IPI
 */
class IPI extends AbstractJsonSerializable
{

    /**
     * Valor do IPI devolvido
     *
     * @property string $vIPIDevol
     */
    protected $vIPIDevol = null;

    /**
     * Gets as vIPIDevol
     *
     * Valor do IPI devolvido
     *
     * @return string
     */
    public function getVIPIDevol()
    {
        return $this->vIPIDevol;
    }

    /**
     * Sets a new vIPIDevol
     *
     * Valor do IPI devolvido
     *
     * @param string $vIPIDevol
     * @return self
     */
    public function setVIPIDevol($vIPIDevol)
    {
        $this->vIPIDevol = $vIPIDevol;
        return $this;
    }


}

