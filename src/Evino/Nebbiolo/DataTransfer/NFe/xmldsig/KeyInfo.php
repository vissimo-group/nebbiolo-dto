<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\xmldsig;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing KeyInfo
 *
 *
 * XSD Type: KeyInfo
 */
class KeyInfo extends BaseDataTransfer
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property X509Data $x509Data
     */
    protected $x509Data = null;

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
     * Gets as x509Data
     *
     * @return X509Data
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param X509Data $x509Data
     * @return self
     */
    public function setX509Data(X509Data $x509Data)
    {
        $this->x509Data = $x509Data;
        return $this;
    }


}

