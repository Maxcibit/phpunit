<?php

require_once('../inc/functions.php');
class GeneralTest extends PHPUnit_Framework_TestCase
{ 
    public function testFunctions()
    {
        $this->assertEquals("def", addSampleText());
        $this->assertEquals("def", addSampleText2());
    }
}
?>