<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['register'])) {
    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check = "SELECT * FROM user WHERE email='$email'";

    $check_user = mysqli_query($data, $check);

    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        echo "<script type='text/javascript'>
        alert('User already exsists');
       </script>";
    } else {

        $sql = "INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES ('', '$name', '$phone', '$email', 'student', '$pass')";

        $result = mysqli_query($data, $sql);

        if ($result) {

            $_SESSION['registerMessage'] = "Register successfully";

            header("location:login.php");


        } else {
            echo "<script type='text/javascript'>
         alert('Error');
        </script>";
        }
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
    <link rel="stylesheet" href="./Styles/Register.css">
</head>

<body>
    <form action="#" method="POST" autocomplete="off">

        <h1>Student Register</h1>


        <label for="name">Name:</label>
        <input type="text" id="name" name="username" placeholder="Name. e.g. Tony Stark" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone no. e.g. 9345124563" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email. e.g. tonyStark@ironman.com" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password e.g. tony#123@" required>

        <button type="submit" name="register">Register</button>


    </form>

</body>

</html>