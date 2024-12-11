<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $qualification = $_POST["qualification"];
    $exp=$_POST["exp"];
    $salary=$_POST["salary"];
    $address=$_POST["address"];
    $resume=$_POST["resume"];
    $msg = $_POST["msg"];

    $to = "info@aascw.ac.in"; 
    $subject = "Career form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Qualification: $qualification\n<br>";
    $body.= "Experience: $exp\n<br>";
    $body.= "Salary: $salary\n<br>";
    $body.= "Address: $address\n<br>";
    $body.= "Resume: $resume\n<br>";
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
        $mail->setFrom('test.jorim@gmail.com', 'Auxilium College Career Form'); 
        $mail->addAddress($to);
        $mail->addAddress('info@aascw.ac.in');
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
