<?php
include 'config/db.php';

$uname = '';
if (!empty($_GET['username'])) {
    $uname = $_GET['username'];
}

$sql = "select * from student_data";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Crud</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="E:\AMPPS Installation Folder\Ampps\www\php_crud\assests\css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div class="contianer">

        <div class="menu">
            <div class="user">
                <div class="username">
                    <?php
                    echo $uname;
                    ?>

                </div>
                <div class="logout">
                    <a href="http://localhost/php_crud/index.html">Logout</a>
                </div>
            </div>

        </div>

        <div class="content">
            <div class="controls">
                <a class="btn btn-default" href="edit.php?add=1">Add New</a>
            </div>
            <br>
            <table>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        ?>

                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['roll_num']; ?>
                            </td>
                            <td>
                                <?php echo $row['first_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['gender']; ?>
                            </td>
                            <td>
                                <?php echo $row['class_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['fee']; ?>
                            </td>
                            <td>
                                <a href="http://localhost/php_crud/edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                            </td>
                            <td>
                                <a href="">Delete</a>

                            </td>
                        </tr>

                        <?php

                    }
                }
                ?>
            </table>
        </div>

    </div>

    <script src="" async defer></script>

</body>

</html>