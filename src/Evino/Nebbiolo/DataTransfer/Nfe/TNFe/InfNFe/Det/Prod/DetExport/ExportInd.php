<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ExportInd
 */
class ExportInd extends BaseDataTransfer
{
    /**
     * Registro de exportação
     *
     * @property string $nRE
     */
    protected $nRE = null;

    /**
     * Chave de acesso da NF-e recebida para exportação
     *
     * @property string $chNFe
     */
    protected $chNFe = null;

    /**
     * Quantidade do item efetivamente exportado
     *
     * @property string $qExport
     */
    protected $qExport = null;

    /**
     * Gets as nRE
     *
     * Registro de exportação
     *
     * @return string
     */
    public function getNRE()
    {
        return $this->nRE;
    }

    /**
     * Sets a new nRE
     *
     * Registro de exportação
     *
     * @param string $nRE
     * @return self
     */
    public function setNRE($nRE)
    {
        $this->nRE = $nRE;
        return $this;
    }

    /**
     * Gets as chNFe
     *
     * Chave de acesso da NF-e recebida para exportação
     *
     * @return string
     */
    public function getChNFe()
    {
        return $this->chNFe;
    }

    /**
     * Sets a new chNFe
     *
     * Chave de acesso da NF-e recebida para exportação
     *
     * @param string $chNFe
     * @return self
     */
    public function setChNFe($chNFe)
    {
        $this->chNFe = $chNFe;
        return $this;
    }

    /**
     * Gets as qExport
     *
     * Quantidade do item efetivamente exportado
     *
     * @return string
     */
    public function getQExport()
    {
        return $this->qExport;
    }

    /**
     * Sets a new qExport
     *
     * Quantidade do item efetivamente exportado
     *
     * @param string $qExport
     * @return self
     */
    public function setQExport($qExport)
    {
        $this->qExport = $qExport;
        return $this;
    }
}
