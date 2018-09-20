<?php

/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 19/09/2018
 * Time: 17:29
 */
class Category
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

    public function update($table, $id, $name)
    {
        $update = "UPDATE $table SET `name`='$name' WHERE `id` = $id";
        $this->conn->exec($update);
    }

    public function insert($table, $name)
    {
        $insert = "INSERT INTO $table(`name`) VALUES ('$name')";
        $this->conn->exec($insert);
    }

    public function delete($table, $id)
    {
        $delete = "DELETE FROM $table WHERE id = '$id'";
        $this->conn->exec($delete);
    }

    public function getById( $table, $id) {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $query = $this->conn->query($sql);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}