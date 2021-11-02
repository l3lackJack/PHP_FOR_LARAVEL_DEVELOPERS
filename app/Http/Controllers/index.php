<?php
use Framework\App;

$tasks = App::get('database')->selectAll('tasks');
$greeting = "Gabriel Urs";

require '../resources/views/index.blade.php';

