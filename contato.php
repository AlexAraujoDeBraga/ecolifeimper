<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

// require("/home1/colher34/public_html/PHPMailer-master/src/PHPMailer.php");
// require("/home1/colher34/public_html/PHPMailer-master/src/SMTP.php");

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
//require 'vendor/autoload.php';

// if (isset($_POST['submit'])) {
//     ob_start();
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];


    //$mail = new PHPMailer(true);

    // try {
    //     //Server settings

    //     $mail = new PHPMailer\PHPMailer\PHPMailer();
    //     $mail->IsSMTP(); // enable SMTP
    //     $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //     $mail->SMTPAuth = true; // authentication enabled
    //     $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    //     $mail->Host = "xxxxx.hostgator.com.br";
    //     $mail->Port = 465; // or 587
    //     $mail->IsHTML(true);
    //     $mail->Username = 'xxxx@xxxxxxx.com.br';
    //     $mail->Password = 'xxxxxxx!';
    //     $mail->SetFrom($email);
    //     $mail->Subject = "E-mail Comercial";
    //     $mail->Body = 'Mensagem:' . $message . '<br>email to:' . $email . '<br>Nome:' . $name;
    //     $mail->AddAddress("xxxxx@xxxxxxx.com.br");

    //     if (empty($name)) {
    //         header("location:https://ecolifeimper.com.br/index.php?error-name");
    //         exit();
    //         ob_end_clean();
    //     } elseif (
    //         strlen($email) < 8 || substr_count($email, "@") != 1
    //         || substr_count($email, ".") == 0
    //     ) {
    //         header("location:https://ecolifeimper.com.br/index.php?error-email");
    //         exit();
    //         ob_end_clean();
    //     } elseif (empty($message)) {
    //         header("location:https://ecolifeimper.com.br/index.php?error-message");
    //         exit();
    //         ob_end_clean();
    //     } else {
    //         $mail->send();
    //         header("location:https://ecolifeimper.com.br/index.php?success");
    //         exit();
    //         ob_end_clean();
    //     }
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     ob_end_clean();
    // }
// }
