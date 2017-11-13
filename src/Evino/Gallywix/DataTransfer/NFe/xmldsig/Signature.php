<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing Signature
 *
 *
 * XSD Type: Signature
 */
class Signature
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfo $keyInfo
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
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\Evino\Gallywix\DataTransfer\Nfe\xmldsig\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }


}

