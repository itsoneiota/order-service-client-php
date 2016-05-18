<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Order extends JSONContainer {

	protected $properties = [
		'ID' => NULL,
		'lines' => []
	];

	public function __construct($ID){
		$this->properties['ID'] = $ID;
	}
}
