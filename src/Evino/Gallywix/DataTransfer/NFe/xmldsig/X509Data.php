<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing X509Data
 *
 *
 * XSD Type: X509Data
 */
class X509Data extends AbstractJsonSerializable
{

    /**
     * @property mixed $x509Certificate
     */
    protected $x509Certificate = null;

    /**
     * Gets as x509Certificate
     *
     * @return mixed
     */
    public function getX509Certificate()
    {
        return $this->x509Certificate;
    }

    /**
     * Sets a new x509Certificate
     *
     * @param mixed $x509Certificate
     * @return self
     */
    public function setX509Certificate($x509Certificate)
    {
        $this->x509Certificate = $x509Certificate;
        return $this;
    }


}

