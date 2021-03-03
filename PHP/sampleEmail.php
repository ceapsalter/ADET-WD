<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

if(isset($_POST['message'])){
    $message = $_POST['message'];
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
    $mail->AddAddress("psalter.cea@yahoo.com", "Psalter Angelo Cea");
    $mail->SetFrom("adetweduu@gmail.com", "AdetWeduu");
    $mail->AddReplyTo("adetweduu@gmail.com", "AdetWeduu");
    $mail->AddCC("ceapsalter@gmail.com", "Psalter Cea");
    $mail->Subject = "Testing PHPMailer using Gmail";
    $content = $message;

    $mail->MsgHTML($content);
    if(!$mail->Send()) {
      echo "Error while sending Email.";
    //  var_dump($mail);
    } else {
      echo "Email sent successfully";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

  </head>

  <body>
  <h1>TinyMCE Quick Start Guide</h1>
    <form method="post" action="<?php $_PHP_SELF ?>">
      <textarea id="mytextarea" name="message">Hello, World!</textarea>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </body>
</html>
