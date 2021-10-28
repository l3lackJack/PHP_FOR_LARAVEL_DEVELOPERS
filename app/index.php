<?php


use framework\App;
$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();



