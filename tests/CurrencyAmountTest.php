<?php
namespace itsoneiota\orderservice;

class CurrencyAmountTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new CurrencyAmount();

        $sut->currency = 'GPB';
        $sut->amount = '10.32';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('GPB', $decoded->currency);
        $this->assertEquals('10.32', $decoded->amount);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
    }

}
