<?php
namespace itsoneiota\orderservice;

class AddressTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Address();
        $sut->title = 'foo';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('foo', $decoded->title);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->town);       
    }

}
