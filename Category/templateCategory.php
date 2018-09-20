<?php require "database/Database.php";
$conn = new Database();
$table = "categories";
$products = $conn->getData($table);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/templateCategory.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <h1 class="font-italic">Library Manager</h1>
                <hr>
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                    <a href="#" class="navbar-brand">Book</a> |
                    <a href="../students/student_form.php" class="navbar-brand">Reader</a> |
                    <a href="#" class="navbar-brand">Borrow books</a> |
                    <a href="#" class="navbar-brand">Author</a> |
                    <a href="templateCategory.php" class="navbar-brand">Categories</a></nav>
                <hr>
                <h2 class="font-italic">Categories List</h2>
                <div style="text-align: center">
                    <form action="layout/insertCategory.php">
                        <input type="submit" value="Add element to category" class="btn btn-warning"
                               style="width: 400px; margin-bottom: 20px">
                    </form>
                </div>
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">id</th>
                        <th class="column2">Category Name</th>
                        <th class="column3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td class="column1"><?php echo $product['id'] ?></td>
                            <td class="column2"><?php echo $product['name'] ?></td>
                            <td class="column3"><a
                                        href="http://localhost/PHP/libaryClass/Category/layout/form_update.php?id=<?php echo $product['id'] ?>">Update</a>
                                |
                                <a href="http://localhost/PHP/libaryClass/Category/lauout/delete_category.php?id=<?php echo $product['id'] ?> " onclick="return confirm('bạn có muốn xóa khôgn')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
