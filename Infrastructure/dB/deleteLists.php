<?php
include_once "Application/list/controller/delete/deleteList.php";
include_once "Infrastructure/dB/connection.php";

function delete($id) {
    //Se crea el query de la base de datos
    $query = "DELETE FROM todolist WHERE idList='{$id}'";
    $pdo = new Connection();
    //Se ejecuta el query
    return $pdo->open()->query($query);
}

//Se valida si hay datos en $_GET
if(delete($_GET['idList'])){
    /**Se exiten datos en $_GET se elimina la lista 
     * y se redirecciona al index*/
    header("Location: index.php");
}else{
    include 'Infrastructure/views/error.php';
}