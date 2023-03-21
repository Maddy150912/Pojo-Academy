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

$id = $_GET['student_id'];

$sql = "SELECT * FROM user WHERE id='$id' ";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    
    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE user SET username='$name', phone='$phone', email='$email', password='$password' WHERE id='$id'";

    
    $result2 = mysqli_query($data, $query);

    if ($result2) {
        echo "<script type='text/javascript'>
        alert('Updated Successfully');
    </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojo-Academy</title>
    <link rel="stylesheet" href="./admin_css/Add_Student.css">
</head>

<body>

    <?php
    include 'sidebar_admin.php';
    ?>

    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">Update Student</h1>
            </div>

            <form action="#" method="POST" autocomplete="off">

                <label for="name">Name:</label>
                <input type="text" id="name" name="username" value="<?php echo "{$info['username']}"; ?>"
                    placeholder="Name. e.g. Tony Stark" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo "{$info['phone']}"; ?>"
                    placeholder="Phone no. e.g. 9345124563" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo "{$info['email']}"; ?>"
                    placeholder="Email. e.g. tonyStark@ironman.com" required>

                <label for="password">Password:</label>
                <input type="text" id="password" name="password" value="<?php echo "{$info['password']}"; ?>"
                    placeholder="Password e.g. tony#123@" required>

                <button type="submit" value="update" name="update">Update</button>


            </form>

        </div>
    </div>

</body>

</html>