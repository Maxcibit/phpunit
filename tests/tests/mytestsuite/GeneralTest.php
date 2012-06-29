<?php

require('../inc/functions.php');

class GeneralTest extends PHPUnit_Framework_TestCase
{ 
	/**
	 * @covers 
	 */
    public function testPHPCPDFunctions()
    {
        $this->assertEquals("def", addSampleText());
        $this->assertEquals("def", addSampleText());
    }
}
?>