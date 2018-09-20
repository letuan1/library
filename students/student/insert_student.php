<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 20/09/2018
 * Time: 13:02
 */
require "../database/Reader.php";

if (isset($_POST['field1'])) {
    $name = $_POST['field1'];
    if (isset($_POST['field2'])) {
        $address = $_POST['field2'];
        if (isset($_POST['field3'])) {
            $phone = $_POST['field3'];
            if (isset($_POST['field4'])) {
                $email = $_POST['field4'];
                if (isset($_POST['field5'])) {
                    $sex = $_POST['field5'];
                    if (isset($_POST['field6'])) {
                        $brithDay = $_POST['field6'];
                        //$table, $name, $address, $phone, $email, $sex, $birthDay
                        $reader = new Reader();
                        $table = "students";
                        $insert = $reader->insert($table, $name, $address, $phone, $email, $sex, $brithDay);
                        header("Location: ../student_form.php");
                    }
                }
            }
        }
    }
}

?>