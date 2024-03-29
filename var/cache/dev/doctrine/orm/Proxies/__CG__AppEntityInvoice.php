<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Invoice extends \App\Entity\Invoice implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'RefundDateInvoice' => [parent::class, 'RefundDateInvoice', null],
        "\0".parent::class."\0".'Sales' => [parent::class, 'Sales', null],
        "\0".parent::class."\0".'data_invoice' => [parent::class, 'data_invoice', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'id_counterparty' => [parent::class, 'id_counterparty', null],
        "\0".parent::class."\0".'id_details' => [parent::class, 'id_details', null],
        "\0".parent::class."\0".'id_manufacturer' => [parent::class, 'id_manufacturer', null],
        "\0".parent::class."\0".'id_payment_method' => [parent::class, 'id_payment_method', null],
        "\0".parent::class."\0".'id_refund_activity' => [parent::class, 'id_refund_activity', null],
        "\0".parent::class."\0".'number_document' => [parent::class, 'number_document', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'quantity' => [parent::class, 'quantity', null],
        "\0".parent::class."\0".'quantity_sold' => [parent::class, 'quantity_sold', null],
        "\0".parent::class."\0".'refund' => [parent::class, 'refund', null],
        "\0".parent::class."\0".'sold_status' => [parent::class, 'sold_status', null],
        "\0".parent::class."\0".'solds' => [parent::class, 'solds', null],
        'RefundDateInvoice' => [parent::class, 'RefundDateInvoice', null],
        'Sales' => [parent::class, 'Sales', null],
        'data_invoice' => [parent::class, 'data_invoice', null],
        'id' => [parent::class, 'id', null],
        'id_counterparty' => [parent::class, 'id_counterparty', null],
        'id_details' => [parent::class, 'id_details', null],
        'id_manufacturer' => [parent::class, 'id_manufacturer', null],
        'id_payment_method' => [parent::class, 'id_payment_method', null],
        'id_refund_activity' => [parent::class, 'id_refund_activity', null],
        'number_document' => [parent::class, 'number_document', null],
        'price' => [parent::class, 'price', null],
        'quantity' => [parent::class, 'quantity', null],
        'quantity_sold' => [parent::class, 'quantity_sold', null],
        'refund' => [parent::class, 'refund', null],
        'sold_status' => [parent::class, 'sold_status', null],
        'solds' => [parent::class, 'solds', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
