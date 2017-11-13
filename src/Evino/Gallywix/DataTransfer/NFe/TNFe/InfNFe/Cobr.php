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
     * @property Cobr\Fat $fat
     */
    private $fat = null;

    /**
     * Dados das duplicatas NT 2011/004
     *
     * @property Cobr\Dup[] $dup
     */
    private $dup = array(

    );

    /**
     * Gets as fat
     *
     * Dados da fatura
     *
     * @return Cobr\Fat
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
     * @param Cobr\Fat $fat
     * @return self
     */
    public function setFat(Cobr\Fat $fat)
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
     * @param Cobr\Dup $dup
     */
    public function addToDup(Cobr\Dup $dup)
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
     * @return Cobr\Dup[]
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
     * @param Cobr\Dup[] $dup
     * @return self
     */
    public function setDup(array $dup)
    {
        $this->dup = $dup;
        return $this;
    }


}

