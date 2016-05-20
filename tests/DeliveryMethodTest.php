<?php
namespace itsoneiota\orderservice;

class DeliveryMethodTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new DeliveryMethod('XYZ987');
        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('XYZ987', $decoded->ID);

        $sut->name = 'foo';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('XYZ987', $decoded->ID);        
        $this->assertEquals('foo', $decoded->name);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->clientID);
    }

}
