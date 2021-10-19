<?php

require 'app/helpers.php';
require 'app/Task.php';


//$task = new Task(1,'comprar pa','a la panaderia', 0);
//var_dump($task);
//var_dump ($_GET['name']); //si usamos el $GET_name podemos obtener el nombre

$user = 'debian-sys-maint';
$pass = 'y1LrMYathEWbKfc3';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);

}catch (\Exception $e){
    echo 'Error de connexio a la base de dades';
}
$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDD::FECTH_CLASS , 'Task');

var_dump($tasks);

$greeting = greet();

