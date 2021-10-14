<?php

include_once "Application/list/controller/create/createList.php";
include_once "Infrastructure/dB/connection.php";

function insert($id, $name) {
    $pdo = new Connection();
    $pdo = $pdo->Open();
    $Query = "INSERT INTO todolist (name)"
            . " VALUES ('{$name}')";
    $Result = $pdo->prepare($Query);
    return $Result->execute();
}
if($new){
    $id = $new->idList();
    $name = $new->name();
    if(insert($id, $name)){
        header("Location: index.php");
    }
}else{
    include "Infrastructure/views/createLists.php";
}



