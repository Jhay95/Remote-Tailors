<?php
// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/Public');
define("SHARED_PATH", PUBLIC_PATH . '/shared');

// Assign the root URL to a PHP constant
// * Can dynamically find everything in URL up to "/public"
$private_end = strpos($_SERVER['SCRIPT_NAME'], '/Private');
$doc_root = substr($_SERVER['SCRIPT_NAME'],0,$private_end) . '/Public/';
define("WWW_ROOT", $doc_root);

require_once("functions.php");
