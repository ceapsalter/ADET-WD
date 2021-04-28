<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/contactStyle.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/xftl4khk1g7s07pylv514af7o2py6oex4op7hgkuty8yi8x2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>


</head>
    <?php
        include("validateContact.php");
    ?>
<body>

    <div class="container">
        <div class="contactUs-form">
            <form class="contactUs-form" name="form" methgod="get" action="validateContact.php">
                <center>
                    <img class="icon mb-4" src="img/Valorant.png" alt="Avatar">
                </center>
                <h1 class="valoFont text-center mb-4">Contact Us</h1>

                <h6 class="text-info mb-2">Note: Subject must be in an Uppercase Form</h6>

                <!-- Name -->
                <div class="form-group">
                    <input pattern="^[A-Za-z]+(?:[-'\s][A-Za-z]+)*$" type="text" id="name" class="form-control" name="name" placeholder="Full Name" required="required" autofocus>
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <input pattern="^[A-Z0-9]*(?:[-'\s][A-Z0-9]+)*$" type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                </div>

                <!-- Message -->
                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Type Message Here ..."></textarea>
                </div>

                <!-- Send Button -->
                <div class="form-group">
                    <center>
                        <button type="submit" class="btn-danger btn-circle btn-xl">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </button>
                    </center>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
