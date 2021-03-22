<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

    function get_browser_name($user_agent){
        $t = strtolower($user_agent);
        $t = " " . $t;
        if (strpos($t, 'opera' ) || strpos($t, 'opr/') ) return 'Opera Browser' ;
        elseif (strpos($t, 'edge' ) ) return 'Microsoft Edge' ;
        elseif (strpos($t, 'chrome' ) ) return 'Google Chrome' ;
        elseif (strpos($t, 'safari' ) ) return 'Safari Browser' ;
        elseif (strpos($t, 'firefox' ) ) return 'Mozilla Firefox' ;
        elseif (strpos($t, 'msie' ) || strpos($t, 'trident/7')) return 'Internet Explorer';
        return 'Unkown';
    }

    if(isset($_GET['email'])){
        date_default_timezone_set("Asia/Manila");
        $browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
        $message =
            "<b>Login Date :</b> " . date("Y/m/d") .
            "<br> <b>Login Time :</b> " . date("h:i:sa") .
            "<br> <b>Browser :</b> " . $browser;
        $email = $_GET['email'];
        $subject = "MIDTERM EXAM NOTIFICATION";
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
        $mail->AddAddress($email, "Ronald Vergel Dela Cruz");
        $mail->SetFrom("adetweduu@gmail.com", "AdetWeduu");
        $mail->AddReplyTo("adetweduu@gmail.com", "AdetWeduu");
        $mail->AddCC("ceapsalter@gmail.com", "Psalter Cea");
        $mail->Subject = $subject;
        $content = $message;

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "<h1><b>Error Logging in!</b></h1>";
        }
        else {
            echo "<h1><b>Notification sent to your Email !</b></h1>";
        }

    }


?>
