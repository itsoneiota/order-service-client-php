<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Line extends JSONContainer {

    protected $properties = [
        'SKU' => NULL,
        'quantity' => NULL,
        'name' => NULL,
        'ID' => NULL,
        'optionAttribute' => [],
        'unitPrice' => NULL,
        'subtotalBeforeDiscounts' => NULL,
        'discounts' => [],
        'subtotal' => NULL,
        'additionalProperties' => []
    ];
}
