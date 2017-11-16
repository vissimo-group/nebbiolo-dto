<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing SignatureValue
 *
 *
 * XSD Type: SignatureValue
 */
class SignatureValue extends AbstractJsonSerializable
{

    /**
     * @property mixed $__value
     */
    protected $__value = null;

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * Construct
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

	/**
	 * Gets or sets the inner value
	 * @return mixed
	 * @internal param mixed $value
	 */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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


}

