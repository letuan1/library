<?php

/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 18/09/2018
 * Time: 15:14
 */
class Database
{

    public function getData($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->conn->query($sql) or die("connect database false");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}