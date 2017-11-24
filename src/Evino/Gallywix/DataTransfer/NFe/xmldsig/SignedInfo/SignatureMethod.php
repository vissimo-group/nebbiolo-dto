<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing SignatureMethod
 */
class SignatureMethod extends BaseGallywixDataTransfer
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

