<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("location:../login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:../login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * from user WHERE usertype='student'";

$result = mysqli_query($data, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojo-Academy</title>
    <link rel="stylesheet" href="./admin_css/view_s.css">
</head>

<body>

    <?php
    include 'sidebar_admin.php';
    ?>

    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">View Students</h1>
<h3>
                <?php 

                    if ($_SESSION['message']) {
                        echo $_SESSION['message'];
                    }

                    unset($_SESSION['message']);

                ?>
</h3>
            </div>
            <div class="table-wrapper">
                <table class="responsive-table">
                    <thead></thead>
                    <tr>
                        <th class="head">Name</th>
                        <th class="head">Phone no</th>
                        <th class="head">Email</th>
                        <th class="head">Password</th>
                        <th class="head">Delete</th>
                        <th class="head">Edit</th>
                    </tr>
                    </thead>

                    <?php

                    while ($info = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td data-label="" class="data">
                                <?php echo "{$info['username']}"; ?>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "{$info['phone']}"; ?>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "{$info['email']}"; ?>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "{$info['password']}"; ?>
                            </td>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "<button class='btn'><a onClick=\" javascript:return confirm('Are you sure you want to delete this student');\" href='delete_student.php?student_id={$info['id']}'>Delete</a></button>"; ?>
                            </td>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "<button class='btn edit'><a href='update_student.php?student_id={$info['id']}'>Edit</a></button>"; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>

        </div>
    </div>

</body>

</html>