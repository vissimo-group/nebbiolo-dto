<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing SignedInfoType
 *
 *
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType $reference
     */
    private $reference = null;

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
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\CanonicalizationMethodAType
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\CanonicalizationMethodAType $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\SignatureMethodAType
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType\SignatureMethodAType $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType $reference
     * @return self
     */
    public function setReference(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

