<?php
include_once "Application/list/controller/select/selectList.php";
include_once "Infrastructure/dB/connection.php";

function select(){
    //Se crea el query
    $query = 'SELECT * FROM todolist';
    $pdo = new connection();
    $results = $pdo->Open()->query($query);
    $rows = [];
    //Se guardan todas las listas en $rows
    foreach ($results->fetchAll() as $row) {
        $rows[] = new toDoList($row['idList'], $row['name']);
    }
    //Se devuelven todas las listas de la base de datos
    return $rows;

}

//Se seleccionas las listas de la base de datos
$lists = select();
include_once 'Infrastructure/views/allLists.php';


