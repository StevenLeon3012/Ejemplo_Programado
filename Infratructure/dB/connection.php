<?php
include "Model/Config.php";

/**
 * Description of Conexion
 */
class Connection {

  private $Str;
  
  /**
   * initial values
   */
  function __construct() {
    $this->Str = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
  }
  
  /**
   * Open DB connection, usign PDO object
   * @return \PDO open conexion
   */
  public function Open() {
    try {
      return new PDO($this->Str, DB_USER, DB_PASSWORD);
    } catch (PDOException $Ex) {
      error_log("ERROR EN " . __FILE__ . " EN LA LINEA" . __LINE__ . " EL ERROR :" . $Ex->getMessage());
      return NULL;
    }
  }

}