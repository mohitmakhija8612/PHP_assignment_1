<?php
  class Database{
    // creating a private variable connection
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    // the connect_db function makes a connection to the database using the credentials provided by the user
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'PHP_1',3308);
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }

    // the create function takes pizzaname quantity and drinks as arguments and appends it to
    // the sql statement and inserts data to the table in database
    public function create($pizzaname,$quantity,$drinks){
      $sql = "INSERT INTO entry (pizzaname, quantity, drinks) VALUES ('$pizzaname', '$quantity', '$drinks')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
  }
  $database = new Database();
?>
