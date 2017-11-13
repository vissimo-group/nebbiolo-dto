<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing X509Data
 *
 *
 * XSD Type: X509Data
 */
class X509Data
{

    /**
     * @property mixed $x509Certificate
     */
    private $x509Certificate = null;

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

