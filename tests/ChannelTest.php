<?php
namespace itsoneiota\orderservice;

class ChannelTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Channel(1234);
        $decoded = json_decode(json_encode($sut));
        $this->assertEquals(1234, $decoded->ID);

        $sut->clientID = '0066';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals(1234, $decoded->ID);
        $this->assertEquals('0066', $decoded->clientID);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->name);
    }

}
