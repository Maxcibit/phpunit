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
//
/**
 * Prüfe PHPUnit-Version
 */
$phpUnitVersion = PHPUnit_Runner_Version::id();
//die( $phpUnitVersion );
if ('@package_version@' !== $phpUnitVersion && version_compare($phpUnitVersion, '3.6.0', '<')) {
    echo 'This version of PHPUnit (' . PHPUnit_Runner_Version::id() . ') is not supported.' . PHP_EOL;
    exit(1);
}
unset($phpUnitVersion);

?>