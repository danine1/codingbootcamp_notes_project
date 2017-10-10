<?php

//define the system directory
define('SYSTEM_DIR', __DIR__ . '/..');

//define a public directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public');

//define a vendor directory
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');

require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';//database
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php';//helper functions
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';//request handling
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';//configuration loading




