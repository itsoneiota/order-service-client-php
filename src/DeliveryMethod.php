<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class DeliveryMethod extends JSONContainer {

    protected $properties = [
        'ID' => NULL,
        'clientID' => NULL,
        'name' => NULL,
        'additionalProperties' => NULL
    ];

    public function __construct($ID){
        $this->properties['ID'] = $ID;
    }
}
