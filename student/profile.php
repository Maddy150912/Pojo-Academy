<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("location:../login.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:../login.php");
}


$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$name = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username='$name'";

$result = mysqli_query($data, $sql);

$info = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql2 = "UPDATE user SET phone='$phone', email='$email', password='$password' WHERE username='$name' ";

    $result2 = mysqli_query($data, $sql2);

    if ($result2) {

        header("location:profile.php");

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
    <link rel="stylesheet" href=".././admin./admin_css/Add_Student.css">
</head>

<body>

    <?php
    include 'student_side.php'
        ?>


    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">Update Profile</h1>
                
            </div>
            <form action="#" method="POST" autocomplete="off">


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