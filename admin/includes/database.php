<?php 

require_once("config.php");


class Database{

    public $connection;

    function __construct(){

    $this->open_db_connection();
    }




    public function open_db_connection(){

    // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(mysqli_connect_error()){
        die("Database connectio failed badly" . mysqli_error());
    }

    }

  public function query($sql) {
    $result = mysqli_query($this->connection, $sql);
  
    return $result;
  }

  private function confirm_query($result){

    if(!$result) {
        die("Query Failed");

    }
  }

  public function escape_string($string){

    $escape_string = mysqli_real_escape_string($this->connection, $string);
    return $escape_string;
  }

  //class for insert and object
  public function the_insert_id(){

    return mysqli_insert_id($this->connection);

  }

}//End of database class

$database = new Database();



?>