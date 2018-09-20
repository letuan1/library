<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 11:29
 */

class Reader
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

    public function delete($table, $id) {
        $delete = "DELETE  FROM $table WHERE id = '$id'";
        $resurl = $this->conn->exec($delete);
    }

    public function insert($table, $name, $address, $phone, $email, $sex, $birthDay) {
        $insert = "INSERT INTO $table(`name`, `address`, `phone`, `email`, `sex`, `birth_day`) VALUES ('$name', '$address', $phone, '$email', $sex, '$birthDay')";
        $resurl = $this->conn->exec($insert);
    }

    public function update($table, $name, $address, $phone, $email, $sex, $birthDay) {
        $update = "UPDATE $table SET `name` = '$name', `address` = '$address', `phone` = $phone, `email` = '$email', `sex` = $sex, `birth_day` = '$birthDay'";
        $resurl = $this->conn->exec($update);
    }

    public function getById( $table, $id) {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $query = $this->conn->query($sql);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
