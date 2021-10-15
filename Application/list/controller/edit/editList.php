<?php
include "Domian/Entities/toDoList.php";
//Validar si hay datos en $_POST
if($_POST){
    //Crear un nuevo objeto tipo lista con los datos de $_POST
    $list = new toDoList($_POST['idList'], $_POST['name']);
}else{
    //Si no hay datos $_POST la variable $new va a devolver false
    $list = false;
}