<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Shipment extends JSONContainer {

    protected $properties = [
        'lines' => [],
        'delivery' => NULL,
        'subtotal' => NULL,
        'additionalProperties' => []
    ];
}
