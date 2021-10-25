<?php
use framework\Database\Database;

require 'config.php';
require 'app/helpers.php';
require 'app/Models/Task.php';
require 'framework/Database/Database.php';

$database = new Database($config);
$tasks = $database->selectAll('tasks');
//$tasks = Database::selectAll('tasks');
//$tasks = Task::SelectAll('tasks');

$greeting = greet();

