<?php

//define the system directory
define('SYSTEM_DIR', __DIR__ . '/..'); //system directory

//define a app directory
define('APP_DIR', SYSTEM_DIR . '/app'); //application directory

//define a public directory
define('ROUTES_DIR', SYSTEM_DIR . '/routes'); // route directory

//define a public directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); //public directory

//define a vendor directory
define('VENDOR_DIR', SYSTEM_DIR . '/vendor'); //vendor directory



require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';//database
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php';//helper functions
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';//request handling
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';//configuration loading








