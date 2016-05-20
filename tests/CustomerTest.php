<?php
namespace itsoneiota\orderservice;

class CustomerTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Customer('ABC123');
        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('ABC123', $decoded->ID);

        $sut->email = 'foo@bar.com';
        $sut->title = 'Mr';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('ABC123', $decoded->ID);
        $this->assertEquals('foo@bar.com', $decoded->email);
        $this->assertEquals('Mr', $decoded->title);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->mobile);
    }

}
