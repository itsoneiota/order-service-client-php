<?php
namespace itsoneiota\orderservice;

class OrderTest extends \PHPUnit_Framework_TestCase {

	/**
	 * It should be JSON serializable.
	 * @test
	 */
	public function canSerializeToJSON() {
		$sut = new Order(123);
		$this->assertEquals('{"ID":123,"lines":[]}', json_encode($sut));

		$sut->lines = ['foo'];
		$this->assertEquals('{"ID":123,"lines":["foo"]}', json_encode($sut));
	}

}
