<?php
require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';

//$user = 'debian-sys-maint';
//$pass = 'y1LrMYathEWbKfc3';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';
$dbh = ConnectDB($config);-
$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
$greeting = greet();

