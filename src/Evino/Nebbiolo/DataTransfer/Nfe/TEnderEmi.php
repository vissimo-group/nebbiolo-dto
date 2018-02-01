<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TEnderEmi
 *
 * Tipo Dados do Endereço do Emitente // 24/10/08 - desmembrado / tamanho mínimo
 * XSD Type: TEnderEmi
 */
class TEnderEmi extends BaseDataTransfer
{
    /**
     * Logradouro
     *
     * @property string $xLgr
     */
    protected $xLgr = null;

    /**
     * Número
     *
     * @property string $nro
     */
    protected $nro = null;

    /**
     * Complemento
     *
     * @property string $xCpl
     */
    protected $xCpl = null;

    /**
     * Bairro
     *
     * @property string $xBairro
     */
    protected $xBairro = null;

    /**
     * Código do município
     *
     * @property string $cMun
     */
    protected $cMun = null;

    /**
     * Nome do município
     *
     * @property string $xMun
     */
    protected $xMun = null;

    /**
     * Sigla da UF
     *
     * @property string $UF
     */
    protected $UF = null;

    /**
     * CEP - NT 2011/004
     *
     * @property string $CEP
     */
    protected $CEP = null;

    /**
     * Código do país
     *
     * @property string $cPais
     */
    protected $cPais = null;

    /**
     * Nome do país
     *
     * @property string $xPais
     */
    protected $xPais = null;

    /**
     * Preencher com Código DDD + número do telefone (v.2.0)
     *
     * @property string $fone
     */
    protected $fone = null;

    /**
     * Gets as xLgr
     *
     * Logradouro
     *
     * @return string
     */
    public function getXLgr()
    {
        return $this->xLgr;
    }

    /**
     * Sets a new xLgr
     *
     * Logradouro
     *
     * @param string $xLgr
     * @return self
     */
    public function setXLgr($xLgr)
    {
        $this->xLgr = $xLgr;
        return $this;
    }

    /**
     * Gets as nro
     *
     * Número
     *
     * @return string
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Sets a new nro
     *
     * Número
     *
     * @param string $nro
     * @return self
     */
    public function setNro($nro)
    {
        $this->nro = $nro;
        return $this;
    }

    /**
     * Gets as xCpl
     *
     * Complemento
     *
     * @return string
     */
    public function getXCpl()
    {
        return $this->xCpl;
    }

    /**
     * Sets a new xCpl
     *
     * Complemento
     *
     * @param string $xCpl
     * @return self
     */
    public function setXCpl($xCpl)
    {
        $this->xCpl = $xCpl;
        return $this;
    }

    /**
     * Gets as xBairro
     *
     * Bairro
     *
     * @return string
     */
    public function getXBairro()
    {
        return $this->xBairro;
    }

    /**
     * Sets a new xBairro
     *
     * Bairro
     *
     * @param string $xBairro
     * @return self
     */
    public function setXBairro($xBairro)
    {
        $this->xBairro = $xBairro;
        return $this;
    }

    /**
     * Gets as cMun
     *
     * Código do município
     *
     * @return string
     */
    public function getCMun()
    {
        return $this->cMun;
    }

    /**
     * Sets a new cMun
     *
     * Código do município
     *
     * @param string $cMun
     * @return self
     */
    public function setCMun($cMun)
    {
        $this->cMun = $cMun;
        return $this;
    }

    /**
     * Gets as xMun
     *
     * Nome do município
     *
     * @return string
     */
    public function getXMun()
    {
        return $this->xMun;
    }

    /**
     * Sets a new xMun
     *
     * Nome do município
     *
     * @param string $xMun
     * @return self
     */
    public function setXMun($xMun)
    {
        $this->xMun = $xMun;
        return $this;
    }

    /**
     * Gets as UF
     *
     * Sigla da UF
     *
     * @return string
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Sets a new UF
     *
     * Sigla da UF
     *
     * @param string $UF
     * @return self
     */
    public function setUF($UF)
    {
        $this->UF = $UF;
        return $this;
    }

    /**
     * Gets as CEP
     *
     * CEP - NT 2011/004
     *
     * @return string
     */
    public function getCEP()
    {
        return $this->CEP;
    }

    /**
     * Sets a new CEP
     *
     * CEP - NT 2011/004
     *
     * @param string $CEP
     * @return self
     */
    public function setCEP($CEP)
    {
        $this->CEP = $CEP;
        return $this;
    }

    /**
     * Gets as cPais
     *
     * Código do país
     *
     * @return string
     */
    public function getCPais()
    {
        return $this->cPais;
    }

    /**
     * Sets a new cPais
     *
     * Código do país
     *
     * @param string $cPais
     * @return self
     */
    public function setCPais($cPais)
    {
        $this->cPais = $cPais;
        return $this;
    }

    /**
     * Gets as xPais
     *
     * Nome do país
     *
     * @return string
     */
    public function getXPais()
    {
        return $this->xPais;
    }

    /**
     * Sets a new xPais
     *
     * Nome do país
     *
     * @param string $xPais
     * @return self
     */
    public function setXPais($xPais)
    {
        $this->xPais = $xPais;
        return $this;
    }

    /**
     * Gets as fone
     *
     * Preencher com Código DDD + número do telefone (v.2.0)
     *
     * @return string
     */
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * Sets a new fone
     *
     * Preencher com Código DDD + número do telefone (v.2.0)
     *
     * @param string $fone
     * @return self
     */
    public function setFone($fone)
    {
        $this->fone = $fone;
        return $this;
    }
}
