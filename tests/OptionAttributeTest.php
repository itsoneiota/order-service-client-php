<?php
namespace itsoneiota\orderservice;

class OptionAttributeTest extends \PHPUnit_Framework_TestCase {

    /**
     * It should be JSON serializable.
     * @test
     */
    public function canSerializeToJSON() {
        $sut = new OptionAttribute();
     
        $sut->key = 'foo';
        $sut->value = 'bar';
        $sut->unknownField = 'bar';

        $decoded = json_decode(json_encode($sut));
        $this->assertEquals('foo', $decoded->key);
        $this->assertEquals('bar', $decoded->value);
        $this->assertEquals('bar', $decoded->additionalProperties->unknownField);
    }

}
