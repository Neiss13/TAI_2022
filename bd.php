<?php
class DB{

    private $host = "localhost;";
    private $dbname = "database";
    private $port = 3306;
    private $user = "root";
    private $password = "";
    private $db_charset = "utf8";
    public function connect(){
        $connect = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";
        return new PDO($this->connect, $this->user, $this->password,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ". $this->db_charset]);
    }

    public function select(){
        $connect = $this->connect();
        $st = $connect->prepare("SELECT * FROM user");
        $st->execute();
        return $st;
    }

    }

?>