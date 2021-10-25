<?php

$config=[
    'database'=> [
        'user'=> 'debian-sys-maint',
        'password'=> 'y1LrMYathEWbKfc3',
        'databasetype'=> 'mysql',
        'host'=> 'localhost',
        'name'=> 'phplaraveldevs',
    ]
];


function fetchAllTasks($dbh){
    $statement = $dbh->prepare('SELECT * FROM tasks;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}