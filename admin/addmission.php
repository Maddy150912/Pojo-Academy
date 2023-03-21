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

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];                                                 //1
    $dob = $_POST['dob'];                                                   //2
$gender = $_POST['gender'];                                                 //3 
    $nationality = $_POST['nationality'];                                   //4
    $religion = $_POST['religion'];                                         //5
    $blood_group = $_POST['blood_group'];                                   //6
    $address = $_POST['address'];                                           //7
    $phone = $_POST['phone'];                                               //8
    $email = $_POST['email'];                                               //9
    $parent_name = $_POST['parent_name'];                                   //10
    $relationship = $_POST['relationship'];                                 //11
    $occupation = $_POST['occupation'];                                     //12
    $parent_phone = $_POST['parent_phone'];                                 //13
    $parent_email = $_POST['parent_email'];                                 //14
    $prev_school = $_POST['prev_school'];                                   //15
    $grade_completed = $_POST['grade_completed'];                           //16
    $year_completed = $_POST['year_completed'];                             //17
    $reason_for_leaving = $_POST['reason_for_leaving'];                     //18
    $medical = $_POST['medical'];                                           //19
    $medical_conditions_specify = $_POST['medical_conditions_specify'];     //20
    $declaration = $_POST['declaration'];                                   //21
    $signature = $_POST['signature'];                                       //22
    $date = $_POST['date'];                                                 //23

    // Insert the form data into the database
    $sql = "INSERT INTO addmission_form (`id`, `name`, `dob`, `gender`, `nationality`, `religion`, `blood_group`, `address`, `phone`, `email`, `parent_name`, `relationship`, `occupation`, `parent_phone`, `parent_email`, `prev_school`, `grade_completed`, `year_completed`, `reason_for_leaving`, `medical`, `medical_conditions_specify`, `declaration`, `signature`, `date`) VALUES ('','$name', '$dob', '$gender', '$nationality', '$religion', '$blood_group', '$address', '$phone', '$email', '$parent_name', '$relationship', '$occupation', '$parent_phone', '$parent_email', '$prev_school', '$grade_completed', '$year_completed', '$reason_for_leaving', '$medical', '$medical_conditions_specify', '$declaration', '$signature', '$date')";


    $result = mysqli_query($data,$sql);

    if ($result) {
        // Display a success message
        echo "<script type='text/javascript'>alert('Thank you for submitting your admission form!')</script>";
        header("location:viewapplications.php");

    } else {
        // Display an error message
        echo '<p>Error: ' . mysqli_error($data) . '</p>';
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
    <link rel="stylesheet" href="./admin_css/Addmission.css">
</head>

<body>

    <?php
    include 'sidebar_admin.php';
    ?>

    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">Addmission From</h1>
            </div>

            <form action="#" method="post">

                <h2>Personal Information:</h2>
                <!-- 1 -->
                <label>Full Name:</label>
                <input type="text" name="name" required>
                <!-- 2 -->
                <label>Date of Birth:</label>
                <input type="date" name="dob" required>
                <!-- 3 -->
                <label>Gender:</label>
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <!-- 4 -->
                <label>Nationality:</label>
                <input type="text" name="nationality" required>
                <!-- 5 -->
                <label>Religion:</label>
                <input type="text" name="religion" required>
                <!-- 6 -->
                <label>Blood Group:</label>
                <input type="text" name="blood_group" required>
                <!-- 7 -->
                <label>Address:</label>
                <textarea name="address" rows="4" cols="30" required></textarea>
                <!-- 8 -->
                <label>Phone Number:</label>
                <input type="tel" name="phone" required>
                <!-- 9 -->
                <label>Email Address:</label>
                <input type="email" name="email" required>
                <!-- 10 -->
                <h2>Parent/Guardian Information:</h2>
                <label>Full Name:</label>
                <input type="text" name="parent_name" required>
                <!-- 11 -->
                <label>Relationship:</label>
                <input type="text" name="relationship" required>
                <!-- 12 -->
                <label>Occupation:</label>
                <input type="text" name="occupation" required>
                <!-- 13 -->
                <label>Phone Number:</label>
                <input type="tel" name="parent_phone" required>
                <!-- 14 -->
                <label>Email Address:</label>
                <input type="email" name="parent_email" required>
                <!-- 15 -->
                <h2>Educational Information:</h2>
                <label>Name of Previous School:</label>
                <input type="text" name="prev_school" required>
                <!-- 16 -->
                <label>Grade Completed:</label>
                <input type="text" name="grade_completed" required>
                <!-- 17 -->
                <label>Year Completed:</label>
                <input type="text" name="year_completed" required>
                <!-- 18 -->
                <label>Reason for Leaving:</label>
                <input type="text" name="reason_for_leaving" required>
                <!-- 19 -->
                <h2>Medical Information:</h2>
                <label>Do you have any medical conditions?</label>
                <select name="medical" required>
                    <option value="">Select</option>
                    <option value="male">Yes</option>
                    <option value="female">No</option>
                </select>
                <!-- 20 -->
                <label>If yes, please specify:</label>
                <textarea name="medical_conditions_specify" rows="4" cols="30"></textarea>
                <!-- 21 -->
                <h2>Declaration:</h2>
                <label>I hereby declare that the information provided by me is true and correct to the best of my
                    knowledge. I understand that providing false information will result in the rejection of my
                    application.</label>
                <input type="checkbox" name="declaration" required>
                <!-- 22 -->
                <label>Signature:</label>
                <input type="text" name="signature" required>
                <!-- 23 -->
                <label>Date:</label>
                <input type="date" name="date" required>

                <br><br>
                <h3>Please submit this form along with the following documents:</h3>
                <ul>
                    <li>Birth Certificate</li>
                    <li>Passport-size photograph</li>
                    <li>Copies of previous academic transcripts</li>
                    <li>Any medical records or reports (if applicable)</li>
                </ul>

                <input type="submit" name="submit" value="Submit">

            </form>



        </div>
    </div>

</body>

</html>