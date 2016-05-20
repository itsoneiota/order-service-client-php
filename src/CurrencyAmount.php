<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class CurrencyAmount extends JSONContainer {

    protected $properties = [
        'currency' => NULL,
        'amount' => NULL,
        'additionalProperties' => []
    ];
}
