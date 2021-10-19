<?php

function greet(){
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];
//Si añadimos el get de esta manera obtenemos el nombre directamente
return  "Hola $name $surname!";
}