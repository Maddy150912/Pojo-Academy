<?php
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if ($_GET['student_id']) {
    
    $user_id = $_GET['student_id'];

    $sql = "DELETE FROM addmission_form WHERE id='$user_id' ";

    $result = mysqli_query($data,$sql);

    if ($result) {

        $_SESSION['message'] = 'Application deleted successfully' ;
        header("location:viewapplications.php");
    }
}

?>