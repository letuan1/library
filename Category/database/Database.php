<?php

/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 18/09/2018
 * Time: 15:14
 */
class Database
{

    private $host = "localhost";
    private $user = "root";
    private $db = "library";
    private $pass = "123456";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->db, $this->user, $this->pass);
    }

    public function getData($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->conn->query($sql) or die("connect database false");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}