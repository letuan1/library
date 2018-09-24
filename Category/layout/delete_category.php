<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 10:11
 */
require "../database/Category.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
}

$category = new CategoryAndStudent();
$table = "categories";
$delete = $category->delete($table, $id);
header("Location: http://localhost/PHP/libaryClass/Category/templateCategory.php")
?>