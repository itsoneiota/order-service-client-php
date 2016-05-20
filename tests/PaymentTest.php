<?php
namespace itsoneiota\orderservice;

class PaymentTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new Payment('ABC123');

        $sut->method = 'Card';
        $sut->gateway = 'Datacash';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('Card', $decoded->method);
        $this->assertEquals('Datacash', $decoded->gateway);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
        $this->assertEquals(null, $decoded->amount);
    }

}
