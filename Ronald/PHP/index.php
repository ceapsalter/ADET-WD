<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

    <?php
        include("validateUser.php");
    ?>

<body>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <form method="post" action="<?php $_PHP_SELF ?>">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="text" name="email" class="form-control" />
                    <label class="email" for="email">Email Address</label>
                </div>

                <!-- First Name -->
                <div class="form-outline mb-4">
                    <input type="text" id="firstName" name="firstName" class="form-control" />
                    <label class="form-label" for="firstName">First Name</label>
                </div>

                <!-- First Name -->
                <div class="form-outline mb-4">
                    <input type="text" id="lastName" name="lastName" class="form-control" />
                    <label class="form-label" for="lastName">Last Name</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>

</body>

</html>
