<?php

require_once('inc/functions.php');
require_once('inc/Data.php');

var_dump(Data::get());

$test = "abc";
$test .= addSampleText();
$test .= addSampleText2();

require_once('inc/ArrayFactory.php');
$array = ArrayFactory::createEmptyArray();

?>