<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

    if(isset($_GET['message'])){
        $message = $_GET['message'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $subject = $_GET['subject'];
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "adetweduu@gmail.com";
        $mail->Password   = "adetweduu123";

        $mail->IsHTML(true);
        $mail->AddAddress($email, $name);
        $mail->SetFrom("adetweduu@gmail.com", "AdetWeduu");
        $mail->AddReplyTo("adetweduu@gmail.com", "AdetWeduu");
        $mail->AddCC("ceapsalter@gmail.com", "Psalter Cea");
        $mail->Subject = $subject;
        $content = $message;

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending the Email !";
        }
        else {
            echo "Email sent Successfully !";
        }

    }


?>
