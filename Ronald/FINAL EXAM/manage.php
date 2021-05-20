<?php
session_start();
include('dbconnection/config.php');
include('session.php');
?>
<html>

<?php include 'header.php' ?>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">FINAL EXAMINATION</h3>
                <strong>F.E</strong>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="home.php">
                        <i class="fas fa-home ml-2"></i>
                        Home
                    </a>
                </li>

                <li class="active">
                    <a href="#">
                        <i class="fas fa-user-graduate ml-2"></i>
                        Manage Students
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <button type="button" title="Logout" class="btn btn-dark">
                                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron">
                <div class="panel-body">
                    <article class="panel-body">
                        <p id="success"></p>
                        <div class="table-wrapper">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2>Manage Students</h2>
                                    </div>
                                    <div class="col-sm-8 float-right">
                                        <a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Student</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>AGE</th>
                                        <th>EMAIL</th>
                                        <th>PHONE</th>
                                        <th>CITY</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $result = mysqli_query($db, "SELECT * FROM students");
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr id="<?php echo $row["id"]; ?>">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["age"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["phone"]; ?></td>
                                            <td><?php echo $row["city"]; ?></td>
                                            <td class="text-center">
                                                <a href="#editStudentModal" class="edit" data-toggle="modal">
                                                    <i class="fas fa-edit material-icons update text-info" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-name="<?php echo $row["name"]; ?>" data-age="<?php echo $row["age"]; ?>" data-email="<?php echo $row["email"]; ?>" data-phone="<?php echo $row["phone"]; ?>" data-city="<?php echo $row["city"]; ?>" title="Edit""></i>
                                                </a> |
                                                <a href=" #deleteStudentModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="fas fa-trash-alt material-icons text-danger" data-toggle="tooltip" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                </div>
                <!-- Add Modal HTML -->
                <div id="addStudentModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="student_form">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Student</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <b>NAME</b>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>AGE</b>
                                        <input type="number" id="age" name="age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>EMAIL</b>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>PHONE</b>
                                        <input type="phone" id="phone" name="phone" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>CITY</b>
                                        <input type="city" id="city" name="city" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" value="1" name="type">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="button" class="btn btn-success" id="btn-add">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editStudentModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="update_form">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Student</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                                    <div class="form-group">
                                        <b>Name</b>
                                        <input type="text" id="name_u" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>Age</b>
                                        <input type="number" id="age_u" name="age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>Email</b>
                                        <input type="email" id="email_u" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>PHONE</b>
                                        <input type="phone" id="phone_u" name="phone" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <b>City</b>
                                        <input type="city" id="city_u" name="city" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" value="2" name="type">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="button" class="btn btn-info" id="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteStudentModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Student</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id_d" name="id" class="form-control">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </article>
                </div>
            </div>

            <footer class="bg-dark text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    <a class="text-light" href="https://www.facebook.com/ronaldvergel.crisostomoii/">Ronald Vergel Dela Cruz</a>
                </div>
            </footer>
        </div>
    </div>




</body>

</html>

<?php include 'footer.php' ?>