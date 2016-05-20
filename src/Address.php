<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Address extends JSONContainer {

    protected $properties = [
        'title' => NULL,
        'firstName' => NULL,
        'lastName' => NULL,
        'address1' => NULL,
        'address2' => NULL,
        'town' => NULL,
        'country' => NULL,
        'locale' => NULL,
        'phone' => NULL,
        'mobile' => NULL,
        'additionalProperties' => []
    ];
}
