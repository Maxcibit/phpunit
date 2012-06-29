<?php


require_once('inc/Data.php');
var_dump(Data::get());

/**
 * sample for cpd
 */
function addSampleText() {
	return "def";	
}
function addSampleText2() {
	return "def";	
}
$test = "abc";
$test .= addSampleText();
$test .= addSampleText2();

require_once('inc/ArrayFactory.php');
$array = ArrayFactory::createEmptyArray();

?>