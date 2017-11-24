<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing Transform
 *
 *
 * XSD Type: Transform
 */
class Transform extends BaseGallywixDataTransfer
{

    /**
     * @property string $algorithm
     */
    protected $algorithm = null;

    /**
     * @property string[] $xPath
     */
    protected $xPath = array(

    );

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

    /**
     * Adds as xPath
     *
     * @return self
     * @param string $xPath
     */
    public function addToXPath($xPath)
    {
        $this->xPath[] = $xPath;
        return $this;
    }

    /**
     * isset xPath
     *
     * @param int $index
     * @return boolean
     */
    public function issetXPath($index)
    {
        return isset($this->xPath[$index]);
    }

    /**
     * unset xPath
     *
     * @param int $index
     * @return void
     */
    public function unsetXPath($index)
    {
        unset($this->xPath[$index]);
    }

    /**
     * Gets as xPath
     *
     * @return string[]
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath
     *
     * @param string[] $xPath
     * @return self
     */
    public function setXPath(array $xPath)
    {
        $this->xPath = $xPath;
        return $this;
    }


}

