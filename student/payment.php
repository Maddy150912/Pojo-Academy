<?php
error_reporting(0);
session_start();

// session_destroy();
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

if (isset($_POST['pay'])) {

    $amount = $_POST['amount'];
    $student_name = $_POST['student_name'];
    $cardholder_name = $_POST['cardholder_name'];

    if ($student_name === $name && $amount !== 'Select Fees') {
        $sql = "INSERT INTO payment (`id`,`amount`,`student_name`,`cardholder_name`) VALUES ('','$amount','$student_name','$cardholder_name')";
    }


    $result = mysqli_query($data, $sql);

    if ($result) {
        // Display a success message
        $_SESSION['paymentmessage'] = "Payment Succssful";

        header("location:successful.php");
    } else {
        // Display an error message
        // echo '<p>Error: ' . mysqli_error($data) . '</p>';
        echo "<script type='text/javascript'>alert('Payment Unsuccessful')</script>";

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
    <link rel="stylesheet" href="./student_css/Payment.css">

    <style>
        select {
            padding: 2px;
            margin-bottom: 7px;
            border-radius: 4px;
            font-size: 1rem;
        }

        .amount {
            font-size: 1rem;
            padding: 10px;
            margin-bottom: 11px;
            border-radius: 4px;
        }

        .button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .button[type="submit"]:hover {
            background-color: #0069d9;
        }


    </style>

</head>

<body>

    <?php
    include 'student_side.php'
        ?>

    <div class="main">

        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">Fees Payment</h1>
            </div>
            <!-- <div class="container"> -->
            <form action="#"  method="POST" id="payment-form">
                <div id="card-details">
                <label for="payment-method">Select Payment Amount:</label>
                <select id="class-amount" name="amount">
                    <option value="Select Fees"  >Select Payment Amount</option>
                    <option value="5thclass/Rs.10000">5thclass / Rs.10000</option>
                    <option value="6thclass/Rs.11000">6thclass / Rs.11000</option>
                    <option value="7thclass/Rs.12000">7thclass / Rs.12000</option>
                    <option value="8thclass/Rs.15000">8thclass / Rs.15000</option>
                    <option value="9thclass/Rs.17000">9thclass / Rs.17000</option>
                    <option value="10thclass/Rs.20000">10thclass / Rs.20000</option>
                    </select>


                    <label for="cardholder-name">Student Name</label>
                    <input type="text" id="student-name" name="student_name" 
                    value="<?php
                     echo "$name";
                    ?>"
                    required>
    
                    <label for="cardholder-name">Cardholder Name</label>
                    <input type="text" id="cardholder-name" name="cardholder_name" required>

                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card_number" required>

                    <label for="expiration-date">Expiration Date</label>
                    <input type="text" id="expiration-date" name="expiration_date" placeholder="MM/YY" required>

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>

                    <input type="submit" name="pay" class="button" value="Submit Payment" />

                </div>

            </form>


            <!-- </div> -->
        </div>
    </div>

</body>

</html>