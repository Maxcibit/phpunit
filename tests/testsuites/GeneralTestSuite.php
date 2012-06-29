<?php

class GeneralTest extends PHPUnit_Framework_TestCase
{ 
    public function testFunctions()
    {
		include('../../inc/functions.php');
        $this->assertEquals("def", addSampleText());
        $this->assertEquals("def", addSampleText2());
    }
}
?>