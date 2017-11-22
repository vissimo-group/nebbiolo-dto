<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing AutXML
 */
class AutXML extends BaseGallywixDataTransfer
{

    /**
     * CNPJ Autorizado
     *
     * @property string $CNPJ
     */
    protected $CNPJ = null;

    /**
     * CPF Autorizado
     *
     * @property string $CPF
     */
    protected $CPF = null;

    /**
     * Gets as CNPJ
     *
     * CNPJ Autorizado
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Sets a new CNPJ
     *
     * CNPJ Autorizado
     *
     * @param string $CNPJ
     * @return self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
        return $this;
    }

    /**
     * Gets as CPF
     *
     * CPF Autorizado
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Sets a new CPF
     *
     * CPF Autorizado
     *
     * @param string $CPF
     * @return self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
        return $this;
    }


}

