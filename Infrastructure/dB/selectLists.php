<?php
include_once "Application/list/controller/select/selectList.php";
include_once "Infrastructure/dB/connection.php";

function select(){
    $query = 'SELECT * FROM todolist';
    $pdo = new connection();
    $results = $pdo->Open()->query($query);
    $rows = [];
    foreach ($results->fetchAll() as $row) {
        $rows[] = new toDoList($row['idList'], $row['name']);
    }
    return $rows;

}

$lists = select();
include_once 'Infrastructure/views/allLists.php';


