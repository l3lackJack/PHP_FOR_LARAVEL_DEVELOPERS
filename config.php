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
function ConnectDB($config){
try {
     return new PDO($config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
} catch (\Exception $e) {
    echo 'Error de connexio a la base de dades';
}
}