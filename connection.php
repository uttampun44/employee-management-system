<?php

define("DB_SERVER", 'localhost');
define("DB_USERNAME", 'root');
define("DB_PASSWORD", '');
define("DB_DATABASE", 'employee_management');

class Connection
{

    private $server = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;

    private $database = DB_DATABASE;

    public $conn;

    public function __construct()
    {
        $this->getConnection();
    }

    public function getConnection()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            echo "Connection error: ";
        } 
    }

   
}

class login extends Connection{
   
    public function login($email, $password)
    {
          $check_login = "SELECT * FROM WHERE email = `$email` ";

          if($check_login)
          {
              echo "Login Successfully";
          }elseif($check_login !== $password){
            echo "Password Not Matching";
          }else{
            echo "Login sucessfully";
          }
    }
}
