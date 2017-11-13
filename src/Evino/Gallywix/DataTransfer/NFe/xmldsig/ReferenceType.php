<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing ReferenceType
 *
 *
 * XSD Type: ReferenceType
 */
class ReferenceType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\TransformType[] $transforms
     */
    private $transforms = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType\DigestMethodAType
     * $digestMethod
     */
    private $digestMethod = null;

    /**
     * @property mixed $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\TransformType $transform
     */
    public function addToTransforms(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\TransformType $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\TransformType[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\TransformType[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * Gets as digestMethod
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType\DigestMethodAType
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType\DigestMethodAType $digestMethod
     * @return self
     */
    public function setDigestMethod(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType\DigestMethodAType $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return mixed
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param mixed $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }


}

