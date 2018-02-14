<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\xmldsig\SignedInfo;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing SignatureMethod
 */
class SignatureMethod extends BaseDataTransfer
{
    /**
     * @property string $algorithm
     */
    protected $algorithm = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }
}
