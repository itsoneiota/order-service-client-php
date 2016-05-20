<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Channel extends JSONContainer {

    protected $properties = [
        'ID' => NULL,
        'clientID' => NULL,
        'name' => NULL,
        'additionalProperties' => []
    ];

    public function __construct($ID){
        $this->properties['ID'] = $ID;
    }
}
