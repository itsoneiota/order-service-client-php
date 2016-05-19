<?php
namespace itsoneiota\orderservice;
use GuzzleHttp\Client;

class OrderServiceClient {

	// Guzzle Client
	protected $client;

	public function __construct(Client $c){
		$this->client = $c;
	}

	/**
	 * Create an order.
	 *
	 * @param Order $o
	 * @return boolean Success.
	 * @throws \RuntimeException on failure.
	 */
	public function createOrder(Order $o){
		$this->client->put("/$o->ID", ['json' => $o]);
	}

}
