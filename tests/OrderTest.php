<?php
namespace itsoneiota\orderservice;

class OrderTest extends \PHPUnit_Framework_TestCase {

	/**
	 * It should be JSON serializable.
	 * @test
	 */
	public function canSerializeToJSON() {
		$sut = new Order(123);
		$decoded = json_decode(json_encode($sut));
		$this->assertEquals(123, $decoded->ID);

		$sut->shipments = ['foo'];
		$decoded = json_decode(json_encode($sut));
		$this->assertEquals(123, $decoded->ID);
		$this->assertEquals(['foo'], $decoded->shipments);
	}

}
