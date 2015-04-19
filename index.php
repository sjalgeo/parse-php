<?php
exit;

# Test gist to demonstrate creating and saving a
# parse.com object with php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'config/constants.php'; # KEYS definition gitignore'd

use Parse\ParseClient;
use Parse\ParseObject;
 
ParseClient::initialize(KEY1,KEY2,KEY3);

$testObject = ParseObject::create("objectName");
$testObject->set("property1", "value1");
$testObject->set("property2", "value2");
$testObject->save();