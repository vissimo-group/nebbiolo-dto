<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing IPI
 */
class IPI extends BaseDataTransfer
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
