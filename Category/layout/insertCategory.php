<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 10:00
 */
require "../database/Category.php";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    header("Location: ../templateCategory.php");
    $category = new CategoryAndStudent();
    $table = "categories";
    $update = $category->insert($table, $name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/from_update.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="container-contact100">
    <div class="wrap-contact100">
        <button class="btn-hide-contact100">
            <i class="zmdi zmdi-close"></i>
        </button>

        <div class="contact100-form-title"
        ">
        <span>Add element to category</span>
    </div>

    <form class="contact100-form validate-form" method="post">
        <div class="wrap-input100 validate-input">
            <input id="name" class="input100" type="text" name="name" placeholder="Full name">
            <span class="focus-input100"></span>
            <label class="label-input100" for="name">
                <span class="lnr lnr-user m-b-2"></span>
            </label>
            <div class="container-contact100-form-btn">
                <input type="submit" value="Add element to category" class="contact100-form-btn">
            </div>

        </div>
    </form>
</div>
</div>
</body>
</html>

