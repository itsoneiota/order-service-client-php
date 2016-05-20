<?php
namespace itsoneiota\orderservice;

class LineTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Line();
     
        $sut->SKU = 'foo';
        $sut->quantity = '3';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('foo', $decoded->SKU);
        $this->assertEquals('3', $decoded->quantity);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->name);
    }

}
