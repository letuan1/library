<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 12:58
 */
require "../database/Reader.php";

if ($_GET['id']){
    $id = $_GET['id'];
}
$reader = new Reader();
$table = "students";
$delete = $reader->delete($table, $id);
header("Location: ../student_form.php")
?>