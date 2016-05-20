<?php
namespace itsoneiota\orderservice;

class ShipmentTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Shipment();

        $sut->lines = ['foo'];
        $sut->delivery = 'bar';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals(['foo'], $decoded->lines);
        $this->assertEquals('bar', $decoded->delivery);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->subtotal);
    }

}
