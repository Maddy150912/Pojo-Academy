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

$sql = "SELECT * from addmission_form ";

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
                <h1 class="recent-Articles">Student Applications</h1>
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
                    <thead>
                        <tr>
                            <th class="head">Edit</th>
                            <th class="head">Delete</th>
                            <th class="head">Name</th>
                            <th class="head">Date of Birth:</th>
                            <th class="head">Gender</th>
                            <th class="head">Nationality</th>
                            <th class="head">Religion</th>
                            <th class="head">Blood Group</th>
                            <th class="head">Address</th>
                            <th class="head">Phone Number</th>
                            <th class="head">Email Address</th>
                            <th class="head">Parent/Guardian Information</th>
                            <th class="head">Relationship</th>
                            <th class="head">Occupation</th>
                            <th class="head">Parents Number</th>
                            <th class="head">Parents Email</th>
                            <th class="head">Previous School</th>
                            <th class="head">Grade Completed</th>
                            <th class="head">Year Completed</th>
                            <th class="head">Reason for Leaving</th>
                            <th class="head">Medical Problem</th>
                            <th class="head">Signature</th>
                            <th class="head">Date</th>
                        </tr>
                    </thead>
                    <?php

                    while ($info = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td data-label="" class="data">
                                <?php echo "<button class='btn edit'><a href='update_addmission.php?student_id={$info['id']}'>Edit</a></button>"; ?>
                            </td>
                            <td data-label="" class="data">
                                <?php echo "<button class='btn'><a onClick=\" javascript:return confirm('Are you sure you want to delete this student');\" href='delete_application.php?student_id={$info['id']}'>Delete</a></button>"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['name']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['dob']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['gender']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['nationality']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['religion']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['blood_group']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['address']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['phone']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['email']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['parent_name']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['relationship']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['occupation']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['parent_phone']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['parent_email']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['prev_school']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['grade_completed']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['year_completed']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['reason_for_leaving']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['medical']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['signature']}"; ?>
                            </td>
                            <td class="data">
                                <?php echo "{$info['date']}"; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>


            </div>
        </div>

</body>

</html>