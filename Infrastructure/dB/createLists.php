<?php

include_once "Application/list/controller/create/createList.php";
include_once "Infrastructure/dB/connection.php";

//Funcion para insertar datos en la base de datos
function insert($id, $name) {
    //Se crea una nueva coneccion
    $pdo = new Connection();
    $pdo = $pdo->Open();
    //Se escribe el query de la base de datos
    $query = "INSERT INTO todolist (name)"
            . " VALUES ('{$name}')";
    $result = $pdo->prepare($query);
    //se ejecuta el query
    return $result->execute();
}
//Se valida si hay datos en $new
if($new){
    /**Si exiten datos en $new se ingresan los 
        * datos en la base y se redirecciona al index*/
    $id = $new->idList();
    $name = $new->name();
    if(insert($id, $name)){
        header("Location: index.php");
    }
}else{
    //Si no hay datos en $new se incluye la vista del formulario 
    include "Infrastructure/views/createLists.php";
}



