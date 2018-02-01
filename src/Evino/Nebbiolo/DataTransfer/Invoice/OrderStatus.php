<?php

namespace Evino\Nebbiolo\DataTransfer\Invoice;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Data transfer used to represent an order status
 * @package Evino\Nebbiolo\DataTransfer\Invoice
 */
class OrderStatus extends BaseDataTransfer
{
    /** @var InvoiceStatus[] */
    protected $invoices;

    /**
     * @return InvoiceStatus[]
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param InvoiceStatus[] $invoices
     * @return OrderStatus
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
        return $this;
    }

    /**
     * @param InvoiceStatus $invoice
     */
    public function appendInvoice($invoice)
    {
        $this->invoices[] = $invoice;
    }
}
