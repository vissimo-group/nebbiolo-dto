<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing TConsReciNFe
 *
 * Tipo Pedido de Consulta do Recido do Lote de Notas Fiscais Eletrônicas
 * XSD Type: TConsReciNFe
 */
class TConsReciNFe extends BaseGallywixDataTransfer
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @property string $tpAmb
     */
    protected $tpAmb = null;

    /**
     * Número do Recibo
     *
     * @property string $nRec
     */
    protected $nRec = null;

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as tpAmb
     *
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @return string
     */
    public function getTpAmb()
    {
        return $this->tpAmb;
    }

    /**
     * Sets a new tpAmb
     *
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @param string $tpAmb
     * @return self
     */
    public function setTpAmb($tpAmb)
    {
        $this->tpAmb = $tpAmb;
        return $this;
    }

    /**
     * Gets as nRec
     *
     * Número do Recibo
     *
     * @return string
     */
    public function getNRec()
    {
        return $this->nRec;
    }

    /**
     * Sets a new nRec
     *
     * Número do Recibo
     *
     * @param string $nRec
     * @return self
     */
    public function setNRec($nRec)
    {
        $this->nRec = $nRec;
        return $this;
    }


}

