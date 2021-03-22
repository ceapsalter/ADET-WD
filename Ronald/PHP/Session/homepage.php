<html>

<head>
    <link href="../../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style3.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/jss/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>CURRICULUM VITAE</title>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">RNLD VRGL</h3>
                <strong>RV</strong>
            </div>

            <ul class="list-unstyled componentss">
                <li class="active">
                    <a href="#">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a href="../contactUs.php">
                        <i class="fa fa-phone"></i>
                        Contact Us
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fa fa-align-left" aria-hidden="true"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-align-justify" aria-hidden="true"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>




            <footer class="bg-dark text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    <a class="text-light" href="https://www.facebook.com/ronaldvergel.crisostomoii/">Ronald Vergel Dela Cruz</a>
                </div>
            </footer>
        </div>



        <script type="text/javascript" src="../../JavaScript/js/jquery-3.5.1.slim.js"></script>
        <script type="text/javascript" src="../../JavaScript/js/popper.min.js"></script>
        <script type="text/javascript" src="../../bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });

        </script>

</body>

</html>
