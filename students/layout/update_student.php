<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 13:40
 */
require "../database/Reader.php";
$reader = new Reader();
$table = "students";
$id = $_GET['id'];
$currentStudent = $reader->getById($table, $id);

if ($currentStudent) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['sex'])) {
        $sex = $_POST['sex'];
    }
    $brithDay = date('Y-m-d H:i:s');
    $reader->update($table, $name, $address, $phone, $email, $sex, $brithDay);
}else{
    echo "không có phần tử này";
}
?>

<link type="text/css" rel="stylesheet" href="../css/insert.css">
<script src="../script/insert.js"></script>
<div style="margin-left: 30%; margin-top: 10%">
    <form class="form-style-4" method="post">
        <h1 style="color: white">UPDATE STUDENT</h1>
        <label for="field1">
            <span>Enter Your Name</span><input type="text" name="name" value="<?php echo $currentStudent['name']?>"/>
        </label>
        <label for="field2">
            <span>Enter Your Address</span><input type="text" name="address" value="<?php echo $currentStudent['address']?>"/>
        </label>
        <label for="field3">
            <span>Enter Your Phone</span><input type="text" name="phone" value="<?php echo $currentStudent['phone']?>"/>
        </label>
        <label for="field4">
            <span>Enter Your Email</span><input type="email" name="email" value="<?php echo $currentStudent['email']?>"/>
        </label>
        <label for="field4">
            <span>Enter Your Sex</span><input type="text" name="sex" value="<?php echo $currentStudent['sex']?>"/>
        </label>
        <label>
            <span>&nbsp;</span><input type="submit" value="Send Letter"/>
        </label>
    </form>
</div>
