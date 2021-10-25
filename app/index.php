<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

//$user = 'debian-sys-maint';
//$pass = 'y1LrMYathEWbKfc3';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';

$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['host'];
$dsn = "$type:host=$host;dbname=$name";


try {
    $dbh = new PDO('m', $user, $pass);

}catch (\Exception $e){
    echo 'Error de connexio a la base de dades';
}
$statement= $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();
$tasks = $statement->fetchAll(PDD::FECTH_CLASS , 'Task');

var_dump($tasks);

$greeting = greet();

