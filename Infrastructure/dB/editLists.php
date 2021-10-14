<?php
include_once "Application/list/controller/edit/editList.php";
include_once "Infrastructure/dB/connection.php";

function update($id, $name){
    $Query = "UPDATE todolist set name ='{$name}'"
                    . " WHERE idList='{$id}'";
    $pdo = new Connection();
    $results = $pdo->open()->prepare($Query);
    return $results->execute();              
}
function selectOne($id){
    $query = "SELECT * FROM todolist WHERE idList = '$id'";
    $pdo = new Connection();
    $results = $pdo->Open()->query($query);
    $row = $results->fetch();
    $list = new toDoList($row['idList'], $row['name']);
    return $list;
}
if($list){
    $id = $list->idList();
    $name = $list->name();
    if(update($id, $name)){
        header("Location: index.php");
    }
}else{
    $selectedList = selectOne($_GET['idList']);
    include "Infrastructure/views/editLists.php";
}