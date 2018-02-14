<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing InfNFeSupl
 */
class InfNFeSupl extends BaseDataTransfer
{
    /**
     * Texto com o QR-Code impresso no DANFE NFC-e
     *
     * @property string $qrCode
     */
    protected $qrcode = null;

    /**
     * Informar a URL da "Consulta por chave de acesso da NFC-e".
     * A mesma URL que deve estar informada no DANFE NFC-e para consulta por chave de acesso.
     *
     * @property string $urlChave
     */
    protected $urlChave = null;

    /**
     * Gets as qrCode
     *
     * Texto com o QR-Code impresso no DANFE NFC-e
     *
     * @return string
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * Sets a new qrCode
     *
     * Texto com o QR-Code impresso no DANFE NFC-e
     *
     * @param string $qrcode
     * @return self
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;
        return $this;
    }

    /**
     * Gets as urlChave
     *
     * Informar a URL da "Consulta por chave de acesso da NFC-e".
     * A mesma URL que deve estar informada no DANFE NFC-e para consulta por chave de acesso.
     *
     * @return string
     */
    public function getUrlChave()
    {
        return $this->urlChave;
    }

    /**
     * Sets a new urlChave
     *
     * Informar a URL da "Consulta por chave de acesso da NFC-e".
     * A mesma URL que deve estar informada no DANFE NFC-e para consulta por chave de acesso.
     *
     * @param string $urlChave
     * @return self
     */
    public function setUrlChave($urlChave)
    {
        $this->urlChave = $urlChave;
        return $this;
    }
}
