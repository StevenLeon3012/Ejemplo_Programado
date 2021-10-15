<?php
include "Domian/Entities/toDoList.php";
//Validar si hay datos en $_POST
if($_POST){
    //Crear un nuevo objeto tipo lista con los datos de $_POST
    $new = new toDoList(0, $_POST['name']);
}else{
    //Si no hay datos $_POST la variable $new va a devolver false
    $new = false;
}