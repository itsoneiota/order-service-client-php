<?php
namespace itsoneiota\orderservice;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class OrderServiceClientTest extends \PHPUnit_Framework_TestCase {

	/**
	 * It should create an order.
	 * @test
	 */
	public function canCreateOrder() {
		$mock = new MockHandler([new Response(200)]);
		$stack = HandlerStack::create($mock);
		$container = [];
		$history = Middleware::history($container);
		$stack->push($history);
		$client = new Client(['handler' => $stack]);

		$sut = new OrderServiceClient($client);
		$o = new Order('cloggs/123');
		$sut->createOrder($o);

		$this->assertEquals(1, count($container));

		$req = $container[0]['request'];
		$this->assertEquals('PUT',$req->getMethod());
		$this->assertEquals('/cloggs/123',$req->getUri()->getPath());
		$body = json_decode($req->getBody());
		$this->assertNotNull($body);
		$this->assertEquals('cloggs/123', $body->ID);
	}

	/**
	 * It should throw an exception if creation fails.
	 * @test
	 * @expectedException \RuntimeException
	 */
	public function canHandleCreateFailure() {
		$mock = new MockHandler([new Response(404)]);
		$stack = HandlerStack::create($mock);
		$container = [];
		$history = Middleware::history($container);
		$stack->push($history);
		$client = new Client(['handler' => $stack]);

		$sut = new OrderServiceClient($client);
		$o = new Order('cloggs/123');
		$sut->createOrder($o);
	}

}
