<?php

/**
 * Test-Bootstrap
 *
 * Das ist eine Beispiel-Datei für die Arbeit mit PHPUnit.
*/

/**
 * Fehlerausgabe aktivieren
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);

/**
 * PHPUnit-Autoloader
 */
require_once 'PHPUnit/Autoload.php';

/**
 * Prüfe PHPUnit-Version
 */
$phpUnitVersion = PHPUnit_Runner_Version::id();
if ('@package_version@' !== $phpUnitVersion && version_compare($phpUnitVersion, '3.5.0', '<')) {
    echo 'This version of PHPUnit (' . PHPUnit_Runner_Version::id() . ') is not supported.' . PHP_EOL;
    exit(1);
}
unset($phpUnitVersion);

/** 
 * Daten der Anwendung laden
 */
require_once('../inc/Data.php');
require_once('../inc/ArrayFactory.php');
require_once('../inc/functions.php');

/**
 * Erstelle TestResult-Objekt und den Observer zum Debuggen
 * der Testausführung.
 */
/*$result = new PHPUnit_Framework_TestResult;

require_once('TestDebugger.php');
$result->addListener(new TestDebugger);

require_once('testsuites/ArrayTestSuite.php');
$suite = new PHPUnit_Framework_TestSuite('class ArrayTest');
$suite->addTest(new ArrayTest('testNewArrayIsEmpty'));
$suite->addTest(new ArrayTest('testArrayContainsAnElement'));
$suite->run($result);

require_once('testsuites/DataTestSuite.php');
$suite = new PHPUnit_Framework_TestSuite('class DataTest');
$suite->addTest(new DataTest('testAdd'));
$suite->run($result);

require_once('testsuites/GeneralTestSuite.php');
$suite = new PHPUnit_Framework_TestSuite('class GeneralTest');
$suite->addTest(new GeneralTest('testFunctions'));
$suite->run($result);*/

?>