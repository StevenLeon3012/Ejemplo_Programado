<?php


/**
 * to do list properties
 */
class toDoList {
    public $idList;
    public $name;

    /**
     * @param integer $idList
     * @param String $name
     */
    public function __construct($idList =  0, $name = ""){
        $this->idList = $idList;
        $this->name = $name;
    }
    public function idList(){
        return $this->idList;
    }
    public function name(){
        return $this->name;
    }
}