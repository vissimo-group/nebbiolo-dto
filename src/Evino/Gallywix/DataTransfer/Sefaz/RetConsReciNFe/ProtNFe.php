<?php

namespace Evino\Gallywix\DataTransfer\Sefaz\RetConsReciNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;
use Evino\Gallywix\DataTransfer\Sefaz\RetConsReciNFe\ProtNFe\InfProt;

/**
 * Class ProtNFe
 * @package Evino\Gallywix\DataTransfer\Sefaz\RetConsReciNFe
 */
class ProtNFe extends BaseGallywixDataTransfer
{
    /** @var Attributes */
    protected $attributes;

    /** @var InfProt[] */
    protected $infProt;

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attributes $attributes
     * @return ProtNFe
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return InfProt[]
     */
    public function getInfProt()
    {
        return $this->infProt;
    }

    /**
     * @param $index
     * @return bool
     */
    public function issetInfProt($index)
    {
        return isset($this->infProt[$index]);
    }

    /**
     * @param $index
     * @return void
     */
    public function unsetInfProt($index)
    {
        unset($this->infProt[$index]);
    }

    /**
     * @param InfProt[] $infProt
     * @return ProtNFe
     */
    public function setInfProt($infProt)
    {
        $this->infProt = $infProt;
        return $this;
    }

    /**
     * @param InfProt $infProt
     * @return ProtNFe
     */
    public function addToInfProt($infProt)
    {
        $this->infProt[] = $infProt;
        return $this;
    }
}
