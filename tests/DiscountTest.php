<?php
namespace itsoneiota\orderservice;

class DiscountTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Discount();
     
        $sut->description = 'foo';
        $sut->promotionID = '123ABC';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('foo', $decoded->description);
        $this->assertEquals('123ABC', $decoded->promotionID);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->clientID);
    }

}
