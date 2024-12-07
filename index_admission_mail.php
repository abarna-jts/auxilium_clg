<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address=$_POST["address"];
    $city = $_POST["city"];
    $state=$_POST["state"];
    $zip_code=$_POST["zip_code"];
    $date=$_POST["date"];
    $msg = $_POST["msg"];

    $to = "abarnadevi.jorimts@gmail.com"; 
    $subject = "Admission form from $fname";
    $body = "First Name: $fname\n <br>";
    $body = "Last Name: $lname\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Address: $address\n<br>";
    $body.= "City: $city\n<br>";
    $body.= "State: $state\n<br>";
    $body.= "Zip Code: $zip_code\n<br>";
    
    $body.= "Date: $date\n<br>";
    $body.="Message: $msg\n<br>";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.jorim@gmail.com';
        $mail->Password = 'lzgqvrublhfdjmfx'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('test.jorim@gmail.com', 'Auxilium College Admission Form'); 
        $mail->addAddress($to);
        $mail->addAddress('abarnadevi.jorimts@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        
        // Respond with 'success' on successful email sending
        echo 'Your Form details submitted to the college Management';
    } catch (Exception $e) {
        // Respond with error message on failure
        echo 'Error sending email: ' . $e->getMessage();
    }
}
?>
