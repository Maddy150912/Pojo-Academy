<?php

error_reporting(0);
session_start();
// session_destroy();

if ($_SESSION['registerMessage']) {
    $message = $_SESSION['registerMessage'];

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
    <link rel="stylesheet" href="./Styles/Login1.css">
</head>

<body>
        <form action="login_check.php" method="POST" class="myform" autocomplete="off">
            <h1>Login form</h1>

            <h3 style="color: red;" >
                <?php

                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];

                ?>
            </h3>

            
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Name. e.g. Tony Stark" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password e.g. tony#123@" required>

                <button type="submit">Login</button>
            

        </form>
</body>

</html>