<?php
// Load Config
require_once('config/config.php');

// Load Modules
spl_autoload_register(function ($className) {
    require_once('modules/' . $className . '.php');
});

