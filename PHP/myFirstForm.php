<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script type="text/javascript" src="../Sir/JavaScript/js/jquery-3.5.1.slim.js"></script>
            <script type="text/javascript" src="../Sir/JavaScript/js/popper.min.js"></script>
            <script type="text/javascript" src="../Sir/bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
            <link href="../Sir/bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <?php

    include("validateUserInput.php");

    ?>

    <body>
        <div class="container-fluid ">

               <div class="card" style="width: 18rem;">
                    <form method="post" action="<?php $_PHP_SELF ?>">
                        <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" name="email" class="form-control" />
                            <label class="form-label" for="form1Example1">Email address</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="firstName" name="firstName" class="form-control" />
                            <label class="form-label" for="firstName">First name</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="lastName" name="lastName" class="form-control" />
                            <label class="form-label" for="lastName">Last Name</label>
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" id="form1Example2" name="password" class="form-control" />
                            <label class="form-label" for="form1Example2">Password</label>
                          </div>

                                                  <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                </div>
        </div>

    </body>
</html>
