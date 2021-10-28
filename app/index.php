<?php


use framework\App;
use framework\Database\Database;



require 'app/helpers.php';

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();



