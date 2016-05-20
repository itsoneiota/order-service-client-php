<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Delivery extends JSONContainer {

    protected $properties = [
        'type' => NULL,
        'quotedDeliveryDate' => NULL,
        'note' => NULL,
        'address' => NULL,
        'method' => NULL,
        'bookedSlot' => NULL,
        'basePrice' => NULL,
        'surcharges' => NULL,
        'price' => NULL,
        'discount' => NULL,
        'subtotal' => NULL,
        'additionalProperties' => NULL
    ];
}
