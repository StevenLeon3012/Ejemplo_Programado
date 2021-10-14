<?php
include "Domian/Entities/toDoList.php";
if($_POST){
    $list = new toDoList($_POST['idList'], $_POST['name']);
}else{
    $list = false;
}