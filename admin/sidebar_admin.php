<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Styles/Admin.css">
    <link rel="stylesheet" href="../Styles/adminresponsive.css">
</head>

<body>

    <header>

        <div class="logosec">
            <div class="logo">Pojo-Academy</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>


    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <h3><a href="viewapplications.php">View Applications</a></h3>
                    </div>

                    <div class="option2 nav-option">
                        <h3><a href="addstudents.php">Add students</a></h3>
                    </div>

                    <div class="nav-option option3">
                        <h3><a href="view_students.php">View students</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <h3><a href="update_student.php">Update students</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <h3><a href="addmission.php">Addmission form</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <h3><a href="update_addmission.php">Update Addmission</a></h3>
                    </div>

                    <div class="nav-option logout">
                        <h3><a href="../logout.php">Logout</a>
                        </h3>
                    </div>

                </div>
            </nav>
        </div>

        <script>
            let menuicn = document.querySelector(".menuicn");
            let nav = document.querySelector(".navcontainer");

            menuicn.addEventListener("click", () => {
                nav.classList.toggle("navclose");
            })
        </script>
</body>

</html>