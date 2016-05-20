<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Customer extends JSONContainer {

    protected $properties = [
        'ID' => NULL,
        'clientID' => NULL,
        'email' => NULL,
        'title' => NULL,
        'firstName' => NULL,
        'lastName' => NULL,
        'phone' => NULL,
        'mobile' => NULL,
        'preferedContactMethod' => NULL,
        'additionalProperties' => []
    ];

    public function __construct($ID){
        $this->properties['ID'] = $ID;
    }
}
