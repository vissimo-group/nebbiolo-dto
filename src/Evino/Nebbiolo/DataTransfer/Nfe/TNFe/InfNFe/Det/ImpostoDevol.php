<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ImpostoDevol
 */
class ImpostoDevol extends BaseDataTransfer
{
    /**
     * Percentual de mercadoria devolvida
     *
     * @property string $pDevol
     */
    protected $pDevol = null;

    /**
     * Informação de IPI devolvido
     *
     * @property ImpostoDevol\IPI $IPI
     */
    protected $IPI = null;

    /**
     * @return \stdClass
     */
    public function toNFeTag()
    {
        $tag = parent::toNFeTag();

        if (!is_null($this->getIPI())) {
            $tag->vIPIDevol = $this->getIPI()->getVIPIDevol();
        }

        return $tag;
    }

    /**
     * Gets as pDevol
     *
     * Percentual de mercadoria devolvida
     *
     * @return string
     */
    public function getPDevol()
    {
        return $this->pDevol;
    }

    /**
     * Sets a new pDevol
     *
     * Percentual de mercadoria devolvida
     *
     * @param string $pDevol
     * @return self
     */
    public function setPDevol($pDevol)
    {
        $this->pDevol = $pDevol;
        return $this;
    }

    /**
     * Gets as IPI
     *
     * Informação de IPI devolvido
     *
     * @return ImpostoDevol\IPI
     */
    public function getIPI()
    {
        return $this->IPI;
    }

    /**
     * Sets a new IPI
     *
     * Informação de IPI devolvido
     *
     * @param ImpostoDevol\IPI $IPI
     * @return ImpostoDevol
     * @internal param $ ImpostoDevol\IPI $IPI* ImpostoDevol\IPI $IPI
     */
    public function setIPI(ImpostoDevol\IPI $IPI)
    {
        $this->IPI = $IPI;
        return $this;
    }
}
