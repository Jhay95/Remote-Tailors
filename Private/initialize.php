<?php
// Load Config
require_once('config/config.php');

require_once 'libs/session.php';

// Load Modules
spl_autoload_register(function ($className) {
    require_once('modules/' . $className . '.php');
});

