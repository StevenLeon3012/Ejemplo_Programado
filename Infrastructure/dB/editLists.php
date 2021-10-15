<?php
include_once "Application/list/controller/edit/editList.php";
include_once "Infrastructure/dB/connection.php";

function update($id, $name){
    //Se crea el query
    $Query = "UPDATE todolist set name ='{$name}'"
                    . " WHERE idList='{$id}'";
    $pdo = new Connection();
    $results = $pdo->open()->prepare($Query);
    //Se ejecuta el query
    return $results->execute();              
}
//Se selecciona una lista en especifico
function selectOne($id){
    $query = "SELECT * FROM todolist WHERE idList = '$id'";
    $pdo = new Connection();
    $results = $pdo->Open()->query($query);
    $row = $results->fetch();
    $list = new toDoList($row['idList'], $row['name']);
    return $list;
}
//Se valida si existe una lista
if($list){
    $id = $list->idList();
    $name = $list->name();
    if(update($id, $name)){
        header("Location: index.php");
    }
}else{
    /**Si no existe una lista en $list se selecciona la lista
     * que se encuentra en $_GET y se incluye la vista de editar
    */
    $selectedList = selectOne($_GET['idList']);
    include "Infrastructure/views/editLists.php";
}