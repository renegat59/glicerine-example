<?php
/* 
 * TODO: This file eventually will be generated by Glicerine generator
 */

require(__DIR__.'/vendor/autoload.php');
$config = require('config/config.php');

$cli = new Glicerine\core\Cli($config, $argv, $argc);
$cli->start();