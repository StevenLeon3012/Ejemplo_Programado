<?php
include_once "Application/list/controller/delete/deleteList.php";
include_once "Infrastructure/dB/connection.php";

function delete($id) {
    $query = "DELETE FROM todolist WHERE idList='{$id}'";
    $pdo = new Connection();
    return $pdo->open()->query($query);
}

if(delete($_GET['idList'])){
    header("Location: index.php");
}else{
    include 'Infrastructure/views/error.php';
}