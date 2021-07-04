<?php

use PandemicPlates\Objects\Site;

//need to include this for autoloading
require_once __DIR__ . '/../vendor/autoload.php';

//Instantiate the site
$site = new Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
    $localize($site);
}

// Start the session system
session_start();
