<?php

// Assign the database parameters to PHP constants
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "remote_tailor");


// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
// URL root
define("URL_ROOT", "http://localhost:8080/CMM004 Coursework/Remote-Tailors/");
define("SITE_NAME", "RemoteTailor");
define("PRIVATE_PATH", dirname(dirname(__FILE__)));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/Public/');
define("MODELS_PATH", PRIVATE_PATH . '/models/');
define("CONTROLLERS_PATH", PRIVATE_PATH . '/controllers/');
define("MODULES_PATH", PRIVATE_PATH . '/modules/');
define("VIEWS_PATH", PRIVATE_PATH . '/views/');
define("PAGES_PATH", VIEWS_PATH . '/pages/');
define("INC_PATH", VIEWS_PATH . '/include/');
define( "HOMEPAGE_NUM_ARTICLES", 6);




