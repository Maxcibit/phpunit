<?php

class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testNewArrayIsEmpty()
    {
        // Create the Array fixture.
        $fixture = ArrayFactory::createEmptyArray();
 
        // Assert that the size of the Array fixture is 0.
        $this->assertEquals(0, sizeof($fixture));
    }
 
    public function testArrayContainsAnElement()
    {
        // Create the Array fixture.
        $fixture = ArrayFactory::createEmptyArray();
 
        // Add an element to the Array fixture.
        $fixture[] = 'Element';
 
        // Assert that the size of the Array fixture is 1.
        $this->assertEquals(1, sizeof($fixture));
    }
}

class DataTest extends PHPUnit_Framework_TestCase
{
    public static function provider()
    {
        return Data::get();
    }
 
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }
}

class GeneralTest extends PHPUnit_Framework_TestCase
{ 
    public function testFunctions()
    {
        $this->assertEquals("def", addSampleText());
        $this->assertEquals("def", addSampleText2());
    }
}
?>