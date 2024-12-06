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
    $course = $_POST["course"];
    $msg = $_POST["msg"];

    $to = "abarnadevi.jorimts@gmail.com"; 
    $subject = "Contact form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Course: $course\n<br>";
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
        $mail->setFrom('test.jorim@gmail.com', 'Auxilium Arts and Science College for Women'); 
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
