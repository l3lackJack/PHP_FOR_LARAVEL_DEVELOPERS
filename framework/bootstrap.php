<?php

use Dotenv\Dotenv;
use framework\App;
use framework\Database\Connection;
use framework\Database\Database;

App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();
