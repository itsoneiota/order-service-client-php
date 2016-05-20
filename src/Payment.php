<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Payment extends JSONContainer {

    protected $properties = [
        'method' => NULL,
        'gateway' => NULL,
        'transactionID' => NULL,
        'amount' => NULL,
        'additionalProperties' => []
    ];
}
