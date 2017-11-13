<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

/**
 * Class representing TIpi
 *
 * Tipo: Dados do IPI
 * XSD Type: TIpi
 */
class TIpi
{

    /**
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @property string $cNPJProd
     */
    private $cNPJProd = null;

    /**
     * Código do selo de controle do IPI
     *
     * @property string $cSelo
     */
    private $cSelo = null;

    /**
     * Quantidade de selo de controle do IPI
     *
     * @property string $qSelo
     */
    private $qSelo = null;

    /**
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @property string $cEnq
     */
    private $cEnq = null;

    /**
     * @property TIpi\IPITrib $iPITrib
     */
    private $iPITrib = null;

    /**
     * @property TIpi\IPINT $iPINT
     */
    private $iPINT = null;

    /**
     * Gets as cNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @return string
     */
    public function getCNPJProd()
    {
        return $this->cNPJProd;
    }

    /**
     * Sets a new cNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @param string $cNPJProd
     * @return self
     */
    public function setCNPJProd($cNPJProd)
    {
        $this->cNPJProd = $cNPJProd;
        return $this;
    }

    /**
     * Gets as cSelo
     *
     * Código do selo de controle do IPI
     *
     * @return string
     */
    public function getCSelo()
    {
        return $this->cSelo;
    }

    /**
     * Sets a new cSelo
     *
     * Código do selo de controle do IPI
     *
     * @param string $cSelo
     * @return self
     */
    public function setCSelo($cSelo)
    {
        $this->cSelo = $cSelo;
        return $this;
    }

    /**
     * Gets as qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @return string
     */
    public function getQSelo()
    {
        return $this->qSelo;
    }

    /**
     * Sets a new qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @param string $qSelo
     * @return self
     */
    public function setQSelo($qSelo)
    {
        $this->qSelo = $qSelo;
        return $this;
    }

    /**
     * Gets as cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @return string
     */
    public function getCEnq()
    {
        return $this->cEnq;
    }

    /**
     * Sets a new cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @param string $cEnq
     * @return self
     */
    public function setCEnq($cEnq)
    {
        $this->cEnq = $cEnq;
        return $this;
    }

    /**
     * Gets as iPITrib
     *
     * @return TIpi\IPITrib
     */
    public function getIPITrib()
    {
        return $this->iPITrib;
    }

    /**
     * Sets a new iPITrib
     *
     * @param TIpi\IPITrib $iPITrib
     * @return self
     */
    public function setIPITrib(TIpi\IPITrib $iPITrib)
    {
        $this->iPITrib = $iPITrib;
        return $this;
    }

    /**
     * Gets as iPINT
     *
     * @return TIpi\IPINT
     */
    public function getIPINT()
    {
        return $this->iPINT;
    }

    /**
     * Sets a new iPINT
     *
     * @param TIpi\IPINT $iPINT
     * @return self
     */
    public function setIPINT(TIpi\IPINT $iPINT)
    {
        $this->iPINT = $iPINT;
        return $this;
    }


}

