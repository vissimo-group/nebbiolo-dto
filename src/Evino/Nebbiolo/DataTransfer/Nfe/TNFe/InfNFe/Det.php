<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DetExport;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\DI\Adi;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Rastro;

/**
 * Class representing Det
 */
class Det extends BaseDataTransfer
{

    /**
     * Número do item do NF
     *
     * @property string $nItem
     */
    protected $nItem = null;

    /**
     * Dados dos produtos e serviços da NF-e
     *
     * @property Det\Prod $prod
     */
    protected $prod = null;

    /**
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @property Det\Imposto $imposto
     */
    protected $imposto = null;

    /**
     * @property Det\ImpostoDevol
     * $impostoDevol
     */
    protected $impostoDevol = null;

    /**
     * Informações adicionais do produto (norma referenciada, informações complementares, etc)
     *
     * @property string $infAdProd
     */
    protected $infAdProd = null;

    /**
     * @return \stdClass|null
     */
    public function getTagInfAdProd()
    {
        if (is_null($this->getInfAdProd())) {
            return null;
        }

        $infAdProd = new \stdClass();
        $infAdProd->infAdProd = $this->getInfAdProd();
        $infAdProd->item = $this->nItem;

        return $infAdProd;
    }

    /**
     * @return array
     */
    public function getTagsNVE()
    {
        if (is_null($this->getProd()) || count($this->getProd()->getNVE()) == 0) {
            return null;
        }

        $nveTags = array();

        /** @var string $nve */
        foreach ($this->getProd()->getNVE() as $nve) {
            $tag = new \stdClass();
            $tag->item = $this->getNItem();
            $tag->NVE = $nve;

            $nveTags[] = $tag;
        }

        return $nveTags;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagCEST()
    {
        if (is_null($this->getProd())) {
            return null;
        }

        $cest = new \stdClass();
        $cest->item = $this->getNItem();
        $cest->CEST = $this->getProd()->getCEST();
        $cest->indEscala = $this->getProd()->getIndEscala();
        $cest->CNPJFab = $this->getProd()->getCNPJFab();

        return $cest;
    }

    /**
     * @return \stdClass|null
     */
    public function getTagRECOPI()
    {
        if (is_null($this->getProd()) || is_null($this->getProd()->getNRECOPI())) {
            return null;
        }

        $recopi = new \stdClass();
        $recopi->item = $this->getNItem();
        $recopi->nRECOPI = $this->getProd()->getNRECOPI();

        return $recopi;
    }

    /**
     * @return array|null
     */
    public function getTagsDI()
    {
        $prod = $this->getProd();
        if (is_null($prod) || count($prod->getDI()) == 0) {
            return null;
        }

        $diTags = array();

        foreach ($prod->getDI() as $di) {
            $tag = $di->toNFeTag();
            $tag->item = $this->getNItem();

            $diTags[] = $tag;
        }

        return $diTags;
    }

    /**
     * @return array|null
     */
    public function getTagsAdi()
    {
        $prod = $this->getProd();
        if (is_null($prod) || count($prod->getDI()) == 0) {
            return null;
        }

        $adiTags = array();
        foreach ($prod->getDI() as $di) {
            /** @var Adi $adi */
            foreach ($di->getAdi() as $adi) {
                $tag = $adi->toNFeTag();
                $tag->item = $this->getNItem();
                $tag->nDI = $di->getNDI();

                $adiTags[] = $tag;
            }
        }

        return count($adiTags) == 0 ? null : $adiTags;
    }

    /**
     * @return null|\stdClass
     */
    public function getTagDetExport()
    {
        $prod = $this->getProd();
        if (is_null($prod) || count($prod->getDetExport()) == 0) {
            return null;
        }

        /** @var DetExport $det */
        $det = $prod->getDetExport()[0];
        $tag = $det->toNFeTag();
        $tag->item = $this->getNItem();

        return $tag;
    }

    /**
     * @return null|array
     */
    public function getTagRastro()
    {
        $prod = $this->getProd();
        if (is_null($prod) || count($prod->getRastro()) == 0) {
            return null;
        }

        $rastroTags = array();
        /** @var Rastro $rastro **/
        foreach ($prod->getRastro() as $rastro) {
            $tag = $rastro->toNFeTag();
            $tag->item = $this->getNItem();
            $rastroTags[] = $tag;
        }

        return count($rastroTags) == 0 ? null : $rastroTags;
    }

    /**
     * Gets as nItem
     *
     * Número do item do NF
     *
     * @return string
     */
    public function getNItem()
    {
        return $this->nItem;
    }

    /**
     * Sets a new nItem
     *
     * Número do item do NF
     *
     * @param string $nItem
     * @return self
     */
    public function setNItem($nItem)
    {
        $this->nItem = $nItem;
        return $this;
    }

    /**
     * Gets as prod
     *
     * Dados dos produtos e serviços da NF-e
     *
     * @return Det\Prod
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Sets a new prod
     *
     * Dados dos produtos e serviços da NF-e
     *
     * @param Det\Prod $prod
     * @return self
     */
    public function setProd(Det\Prod $prod)
    {
        $this->prod = $prod;
        return $this;
    }

    /**
     * Gets as imposto
     *
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @return Det\Imposto
     */
    public function getImposto()
    {
        return $this->imposto;
    }

    /**
     * Sets a new imposto
     *
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @param Det\Imposto $imposto
     * @return self
     */
    public function setImposto(Det\Imposto $imposto)
    {
        $this->imposto = $imposto;
        return $this;
    }

    /**
     * Gets as impostoDevol
     *
     * @return Det\ImpostoDevol
     */
    public function getImpostoDevol()
    {
        return $this->impostoDevol;
    }

    /**
     * Sets a new impostoDevol
     *
     * @param Det\ImpostoDevol $impostoDevol
     * @return self
     */
    public function setImpostoDevol(Det\ImpostoDevol $impostoDevol)
    {
        $this->impostoDevol = $impostoDevol;
        return $this;
    }

    /**
     * Gets as infAdProd
     *
     * Informações adicionais do produto (norma referenciada, informações complementares, etc)
     *
     * @return string
     */
    public function getInfAdProd()
    {
        return $this->infAdProd;
    }

    /**
     * Sets a new infAdProd
     *
     * Informações adicionais do produto (norma referenciada, informações complementares, etc)
     *
     * @param string $infAdProd
     * @return self
     */
    public function setInfAdProd($infAdProd)
    {
        $this->infAdProd = $infAdProd;
        return $this;
    }

}
