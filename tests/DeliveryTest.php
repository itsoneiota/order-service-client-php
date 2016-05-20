<?php
namespace itsoneiota\orderservice;

class DeliveryTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Delivery();

        $sut->type = 'foo';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('foo', $decoded->type);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->note);
    }

}
