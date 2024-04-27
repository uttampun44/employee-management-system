<?php


define("DB_SERVER", 'localhost');
define("DB_USERNAME", 'root');
define("DB_PASSWORD", '');
define("DB_DATABASE", 'employee_management');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connection) {
    echo "connection error";
} else {
    echo "connection success";
}

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
        } else {
            echo "Connection Success";
        }
    }

    public function login()
    {

    }
}
