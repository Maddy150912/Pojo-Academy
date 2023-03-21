<?php

error_reporting(0);
session_start();
// session_destroy();

if ($_SESSION['paymentmessage']) {
    $message = $_SESSION['paymentmessage'];

    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojo-Academy</title>
    <!-- <link rel="stylesheet" href=".././admin./admin_css/Add_Student.css"> -->

<style>

.report-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
h1{
    color: green;
    font-family: cursive;
    text-transform: capitalize;
}

</style>

</head>

<body>

    <?php
    include 'student_side.php'
        ?>


    <div class="main">

        <div class="report-container">
        
        <h1>your transaction is successful</h1>
</div>
</div>
</body>

</html>