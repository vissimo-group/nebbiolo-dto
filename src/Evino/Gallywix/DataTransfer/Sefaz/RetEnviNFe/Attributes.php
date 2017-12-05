<?php

namespace Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class Attributes
 * @package Evino\Gallywix\DataTransfer\Sefaz\RetEnviNFe
 */
class Attributes extends BaseGallywixDataTransfer
{
    /** @var string */
    protected $versao;

    /**
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * @param string $versao
     * @return Attributes
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }
}
