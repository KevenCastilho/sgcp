<?php
$php_version = phpversion();

error_reporting(E_ALL ^ E_NOTICE);

include_once "function/lib_memory.php";
// remove quotes added by php
if (get_magic_quotes_gpc()) {
    CP_arrayWalkRecursive($_GET, 'stripslashes', true);
    CP_arrayWalkRecursive($_POST, 'stripslashes', true);
    CP_arrayWalkRecursive($_COOKIE, 'stripslashes', true);
    CP_arrayWalkRecursive($_REQUEST, 'stripslashes', true);
}

include_once "config.php";
include_once "extract.inc.php";
include_once "function/function.php";
include_once "function/job_class.php";
include_once "function/cp.php";
include_once "lang.php";

$CP['ip_address'] = get_ip();
$CP['time'] = time();
?>