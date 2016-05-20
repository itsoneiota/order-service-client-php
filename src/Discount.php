<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Discount extends JSONContainer {

    protected $properties = [
        'description' => NULL,
        'clientID' => NULL,
        'promotionID' => NULL,
        'correlationID' => NULL,
        'discountCode' => NULL,
        'amountDiscounted' => NULL,
        'additionalProperties' => NULL
    ];
}
