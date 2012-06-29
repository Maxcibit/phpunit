<?php

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
?>