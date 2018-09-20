<?php
require "database/Reader.php";
$student = new Reader();
$table = "students";
$students = $student->getData($table);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title><Table> Responsive</title>
    <link rel="stylesheet" href="css/student_form.css">
</head>

<body>

<h1><span class="yellow">Reader List</span></h1>
<br>
<nav class="navbar navbar-dark bg-dark" style="text-align: center">
    <a href="#" class="color">Book | </a>
    <a href="../students/student_form.php" class="color">Reader | </a>
    <a href="#" class="color">Borrow books | </a>
    <a href="#" class="color">Author | </a>
    <a href="../Category/templateCategory.php" class="color">Categories</a></nav>
<br>
<table class="container">
    <thead>
    <tr>
        <th><h1>id</h1></th>
        <th><h1>Name</h1></th>
        <th><h1>Address</h1></th>
        <th><h1>Phone</h1></th>
        <th><h1>Email</h1></th>
        <th><h1>Sex</h1></th>
        <th><h1>Birth Day</h1></th>
        <th><h1></h1></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student) : ?>
    <tr>
        <td><?php echo $student['id'] ?></td>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['address'] ?></td>
        <td><?php echo $student['phone'] ?></td>
        <td><?php echo $student['email'] ?></td>
        <td><?php echo $student['sex'] ?></td>
        <td><?php echo $student['birth_day'] ?></td>
        <td><a href="layout/update_student.php?id=<?php echo $student['id']?>" class="color">Update | </a><a href="student/delete_student.php?id=<?php echo $student['id'];?>" class="color" onclick="return confirm('bạn có muốn xóa không')">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="layout/student_insert.php" class="yellow"><h1 style="color: yellow">More people</h1></a>
</body>

</html>
