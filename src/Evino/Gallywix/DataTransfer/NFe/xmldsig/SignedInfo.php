<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing SignedInfo
 *
 *
 * XSD Type: SignedInfo
 */
class SignedInfo extends AbstractJsonSerializable
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property SignedInfo\CanonicalizationMethod
     * $canonicalizationMethod
     */
    protected $canonicalizationMethod = null;

    /**
     * @property SignedInfo\SignatureMethod
     * $signatureMethod
     */
    protected $signatureMethod = null;

    /**
     * @property Reference $reference
     */
    protected $reference = null;

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
     * Gets as canonicalizationMethod
     *
     * @return SignedInfo\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo\CanonicalizationMethod
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(SignedInfo\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return SignedInfo\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo\SignatureMethod
     * $signatureMethod
     * @return self
     */
    public function setSignatureMethod(SignedInfo\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param Reference $reference
     * @return self
     */
    public function setReference(Reference $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

