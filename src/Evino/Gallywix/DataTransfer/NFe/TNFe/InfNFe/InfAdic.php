<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing InfAdic
 */
class InfAdic extends BaseGallywixDataTransfer
{

    /**
     * Informações adicionais de interesse do Fisco (v2.0)
     *
     * @property string $infAdFisco
     */
    protected $infAdFisco = null;

    /**
     * Informações complementares de interesse do Contribuinte
     *
     * @property string $infCpl
     */
    protected $infCpl = null;

    /**
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @property InfAdic\ObsCont[]
     * $obsCont
     */
    protected $obsCont = array(

    );

    /**
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @property InfAdic\ObsFisco[]
     * $obsFisco
     */
    protected $obsFisco = array(

    );

    /**
     * Grupo de informações do processo referenciado
     *
     * @property InfAdic\ProcRef[]
     * $procRef
     */
    protected $procRef = array(

    );

    /**
     * Gets as infAdFisco
     *
     * Informações adicionais de interesse do Fisco (v2.0)
     *
     * @return string
     */
    public function getInfAdFisco()
    {
        return $this->infAdFisco;
    }

    /**
     * Sets a new infAdFisco
     *
     * Informações adicionais de interesse do Fisco (v2.0)
     *
     * @param string $infAdFisco
     * @return self
     */
    public function setInfAdFisco($infAdFisco)
    {
        $this->infAdFisco = $infAdFisco;
        return $this;
    }

    /**
     * Gets as infCpl
     *
     * Informações complementares de interesse do Contribuinte
     *
     * @return string
     */
    public function getInfCpl()
    {
        return $this->infCpl;
    }

    /**
     * Sets a new infCpl
     *
     * Informações complementares de interesse do Contribuinte
     *
     * @param string $infCpl
     * @return self
     */
    public function setInfCpl($infCpl)
    {
        $this->infCpl = $infCpl;
        return $this;
    }

    /**
     * Adds as obsCont
     *
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @return self
     * @param InfAdic\ObsCont $obsCont
     */
    public function addToObsCont(InfAdic\ObsCont $obsCont)
    {
        $this->obsCont[] = $obsCont;
        return $this;
    }

    /**
     * isset obsCont
     *
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param int $index
     * @return boolean
     */
    public function issetObsCont($index)
    {
        return isset($this->obsCont[$index]);
    }

    /**
     * unset obsCont
     *
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param int $index
     * @return void
     */
    public function unsetObsCont($index)
    {
        unset($this->obsCont[$index]);
    }

    /**
     * Gets as obsCont
     *
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @return InfAdic\ObsCont[]
     */
    public function getObsCont()
    {
        return $this->obsCont;
    }

    /**
     * Sets a new obsCont
     *
     * Campo de uso livre do contribuinte
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic\ObsCont[]
     * $obsCont
     * @return self
     */
    public function setObsCont(array $obsCont)
    {
        $this->obsCont = $obsCont;
        return $this;
    }

    /**
     * Adds as obsFisco
     *
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @return self
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic\ObsFisco
     * $obsFisco
     */
    public function addToObsFisco(InfAdic\ObsFisco $obsFisco)
    {
        $this->obsFisco[] = $obsFisco;
        return $this;
    }

    /**
     * isset obsFisco
     *
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param int $index
     * @return boolean
     */
    public function issetObsFisco($index)
    {
        return isset($this->obsFisco[$index]);
    }

    /**
     * unset obsFisco
     *
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param int $index
     * @return void
     */
    public function unsetObsFisco($index)
    {
        unset($this->obsFisco[$index]);
    }

    /**
     * Gets as obsFisco
     *
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @return InfAdic\ObsFisco[]
     */
    public function getObsFisco()
    {
        return $this->obsFisco;
    }

    /**
     * Sets a new obsFisco
     *
     * Campo de uso exclusivo do Fisco
     * informar o nome do campo no atributo xCampo
     * e o conteúdo do campo no xTexto
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic\ObsFisco[]
     * $obsFisco
     * @return self
     */
    public function setObsFisco(array $obsFisco)
    {
        $this->obsFisco = $obsFisco;
        return $this;
    }

    /**
     * Adds as procRef
     *
     * Grupo de informações do processo referenciado
     *
     * @return self
     * @param InfAdic\ProcRef $procRef
     */
    public function addToProcRef(InfAdic\ProcRef $procRef)
    {
        $this->procRef[] = $procRef;
        return $this;
    }

    /**
     * isset procRef
     *
     * Grupo de informações do processo referenciado
     *
     * @param int $index
     * @return boolean
     */
    public function issetProcRef($index)
    {
        return isset($this->procRef[$index]);
    }

    /**
     * unset procRef
     *
     * Grupo de informações do processo referenciado
     *
     * @param int $index
     * @return void
     */
    public function unsetProcRef($index)
    {
        unset($this->procRef[$index]);
    }

    /**
     * Gets as procRef
     *
     * Grupo de informações do processo referenciado
     *
     * @return InfAdic\ProcRef[]
     */
    public function getProcRef()
    {
        return $this->procRef;
    }

    /**
     * Sets a new procRef
     *
     * Grupo de informações do processo referenciado
     *
     * @param \Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic\ProcRef[]
     * $procRef
     * @return self
     */
    public function setProcRef(array $procRef)
    {
        $this->procRef = $procRef;
        return $this;
    }


}

