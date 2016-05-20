<?php
namespace itsoneiota\orderservice;
/**
 *
 */
class Order extends JSONContainer {

	protected $properties = [
		'ID' => NULL,
        'clientID' => NULL,
        'dateAdded' => NULL,
        'channel' => NULL,
        'customer' => NULL,
        'billingAddress' => NULL,
        'shipments' => [],
        'payments' => [],
        'productsSubtotalBeforeDiscounts' => NULL,
        'deliverySubtotalBeforeDiscounts' => NULL,
        'discounts' => [],
        'total' => NULL,
        'reciptText' => NULL,
		'additionalProperties' => []
	];

	public function __construct($ID){
		$this->properties['ID'] = $ID;
	}
}
