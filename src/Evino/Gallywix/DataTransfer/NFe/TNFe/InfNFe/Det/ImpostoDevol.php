<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing ImpostoDevol
 */
class ImpostoDevol extends AbstractJsonSerializable
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
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol\IPI $IPI
     */
    protected $IPI = null;

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
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol\IPI
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
	 * @internal param $ \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol\IPI $IPI* \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Det\ImpostoDevol\IPI $IPI
	 */
    public function setIPI(ImpostoDevol\IPI $IPI)
    {
        $this->IPI = $IPI;
        return $this;
    }


}

