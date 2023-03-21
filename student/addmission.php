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

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $parent_name = $_POST['parent_name'];
    $relationship = $_POST['relationship'];
    $occupation = $_POST['occupation'];
    $parent_phone = $_POST['parent_phone'];
    $parent_email = $_POST['parent_email'];
    $prev_school = $_POST['prev_school'];
    $grade_completed = $_POST['grade_completed'];
    $year_completed = $_POST['year_completed'];
    $reason_for_leaving = $_POST['reason_for_leaving'];
    $medical = $_POST['medical'];
    $medical_conditions_specify = $_POST['medical_conditions_specify'];
    $declaration = $_POST['declaration'];
    $signature = $_POST['signature'];
    $date = $_POST['date'];

    // Insert the form data into the database
    $sql = "INSERT INTO addmission_form (`id`, `name`, `dob`, `gender`, `nationality`, `religion`, `blood_group`, `address`, `parent_name`, `relationship`, `occupation`, `parent_phone`, `parent_email`, `prev_school`, `grade_completed`, `year_completed`, `reason_for_leaving`, `medical`, `medical_conditions_specify`, `declaration`, `signature`, `date`) VALUES ('','$name', '$dob', '$gender', '$nationality', '$religion', '$blood_group', '$address', '$parent_name', '$relationship', '$occupation', '$parent_phone', '$parent_email', '$prev_school', '$grade_completed', '$year_completed', '$reason_for_leaving', '$medical', '$medical_conditions_specify', '$declaration', '$signature', '$date')";


    $result = mysqli_query($data, $sql);

    if ($result) {
        // Display a success message
        echo "<script type='text/javascript'>Thank you for submitting your admission form!</script>";
        header("location:payment.php");
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
    <link rel="stylesheet" href="./student_css/addmission.css">
</head>

<body>

    <?php
    include 'student_side.php';
    ?>

    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">Addmission From</h1>
            </div>

            <form action="#" method="post" autocomplete="off" >

                <h2>Personal Information:</h2>
                <label>Full Name:</label>
                <input type="text" name="name" required>

                <label>Date of Birth:</label>
                <input type="date" name="dob" required>

                <label>Gender:</label>
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label>Nationality:</label>
                <input type="text" name="nationality" required>

                <label>Religion:</label>
                <input type="text" name="religion" required>

                <label>Blood Group:</label>
                <input type="text" name="blood_group" required>

                <label>Address:</label>
                <textarea name="address" rows="4" cols="30" required></textarea>

                <label>Phone Number:</label>
                <input type="tel" name="phone" required>

                <label>Email Address:</label>
                <input type="email" name="email" required>

                <h2>Parent/Guardian Information:</h2>
                <label>Full Name:</label>
                <input type="text" name="parent_name" required>

                <label>Relationship:</label>
                <input type="text" name="relationship" required>

                <label>Occupation:</label>
                <input type="text" name="occupation" required>

                <label>Phone Number:</label>
                <input type="tel" name="parent_phone" required>

                <label>Email Address:</label>
                <input type="email" name="parent_email" required>

                <h2>Educational Information:</h2>
                <label>Name of Previous School:</label>
                <input type="text" name="prev_school" required>

                <label>Grade Completed:</label>
                <input type="text" name="grade_completed" required>

                <label>Year Completed:</label>
                <input type="text" name="year_completed" required>

                <label>Reason for Leaving:</label>
                <input type="text" name="reason_for_leaving" required>

                <h2>Medical Information:</h2>
                <label>Do you have any medical conditions?</label>
                <select name="medical" required>
                    <option value="">Select</option>
                    <option value="male">Yes</option>
                    <option value="female">No</option>
                </select>

                <label>If yes, please specify:</label>
                <textarea name="medical_conditions_specify" rows="4" cols="30"></textarea>

                <h2>Declaration:</h2>
                <label>I hereby declare that the information provided by me is true and correct to the best of my
                    knowledge. I understand that providing false information will result in the rejection of my
                    application.</label>
                <input type="checkbox" name="declaration" required>

                <label>Signature:</label>
                <input type="text" name="signature" required>

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