<?php
include "Domian/Entities/toDoList.php";
if($_POST){
    $new = new toDoList(0, $_POST['name']);
}else{
    $new = false;
}