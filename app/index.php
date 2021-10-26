<?php


use framework\Database\Database;



require 'app/helpers.php';

$database = new Database(require 'config.php'); // -> Laravel no utilitzem gairebé mai new -> DI i Container
$tasks = $database->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense new
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent


$greeting = greet();

