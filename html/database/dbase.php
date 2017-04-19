<?php
//define("DB_SERVER", "http://54.193.46.136");
define("DB_SERVER", "localhost");
define("DB_USER", "sswd-admin");
define("DB_PASS", "admin");
define("DB_NAME", "my_guitar_shop2");

class MySQLDatabase {

//private $connection;
public $connection;
//public $affected_row;

public function open_connection() {
$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
     //$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  } else {
      echo 'connection OK';
  }
}

public function close_connection() {
  if(isset($this->connection)) {
    mysqli_close($this->connection);
    unset($this->connection);
    echo 'connection closed';
  }
}
}
$database = new MySQLDatabase();
$database->open_connection();
$database-> close_connection();
?>