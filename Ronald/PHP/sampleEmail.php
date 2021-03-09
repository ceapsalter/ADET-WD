<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';


    if ($_POST){
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
        $mail->AddAddress("DelaCruz.RonaldVergel@gmail.com", "Ronald Vergel Dela Cruz");
        $mail->SetFrom("adetweduu@gmail.com", "AdetWeduu");
        //$mail->AddReplyTo("ceapsalter@gmail.com", "TESTING");
        //$mail->AddCC("ceapsalter@gmail.com", "TEST");
        $mail->Subject = "Testing PHPMailer using GMail";
        $content = "<i>Testing PHPMailer using GMail</i>";

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
          echo "Error while sending Email.";
        //  var_dump($mail);
        } else {
          echo "Email sent successfully";
        }

    }

?>
