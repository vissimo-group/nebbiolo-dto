<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValueType $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfoType $keyInfo
     */
    private $keyInfo = null;

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
     * Gets as signedInfo
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType $signedInfo
     * @return self
     */
    public function setSignedInfo(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfoType $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValueType
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValueType $signatureValue
     * @return self
     */
    public function setSignatureValue(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValueType $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfoType
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfoType $keyInfo
     * @return self
     */
    public function setKeyInfo(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfoType $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }


}

