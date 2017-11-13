<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

/**
 * Class representing Cobr
 */
class Cobr
{

    /**
     * Dados da fatura
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Fat $fat
     */
    private $fat = null;

    /**
     * Dados das duplicatas NT 2011/004
     *
     * @property \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Dup[] $dup
     */
    private $dup = array(

    );

    /**
     * Gets as fat
     *
     * Dados da fatura
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Fat
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * Sets a new fat
     *
     * Dados da fatura
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Fat $fat
     * @return self
     */
    public function setFat(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Fat $fat)
    {
        $this->fat = $fat;
        return $this;
    }

    /**
     * Adds as dup
     *
     * Dados das duplicatas NT 2011/004
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Dup $dup
     */
    public function addToDup(\Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Dup $dup)
    {
        $this->dup[] = $dup;
        return $this;
    }

    /**
     * isset dup
     *
     * Dados das duplicatas NT 2011/004
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDup($index)
    {
        return isset($this->dup[$index]);
    }

    /**
     * unset dup
     *
     * Dados das duplicatas NT 2011/004
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDup($index)
    {
        unset($this->dup[$index]);
    }

    /**
     * Gets as dup
     *
     * Dados das duplicatas NT 2011/004
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Dup[]
     */
    public function getDup()
    {
        return $this->dup;
    }

    /**
     * Sets a new dup
     *
     * Dados das duplicatas NT 2011/004
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cobr\Dup[] $dup
     * @return self
     */
    public function setDup(array $dup)
    {
        $this->dup = $dup;
        return $this;
    }


}

