<?php
// include database connection file
session_start();
include_once("dbconnection/config.php");
$userID = $_SESSION['userID'];
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['inputAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['inputEmail'];
    $birthDate = $_POST['birthDate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];
    $citizenship = $_POST['citizenship'];
    $religion = $_POST['religion'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    // update user data
    $queryPersonal = mysqli_query($db, "UPDATE personal_details SET `firstName`='$firstName', `middleName`='$middleName', `lastName`='$lastName', `email`='$email', `phoneNumber`='$phoneNumber', `birthDate`='$birthDate', `age`='$age', `gender`='$gender', `maritalStatus`='$maritalStatus', `citizenship`='$citizenship', `religion`='$religion', `height`='$height', `weight`='$weight', `address`='$address' WHERE personal_id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: userdashboard.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$queryPersonal = mysqli_query($db, "SELECT * FROM personal_details WHERE personal_id = '$id' LIMIT 1");

while ($user_data = mysqli_fetch_array($queryPersonal)) {
    $firstName = $user_data['firstName'];
    $middleName = $user_data['middleName'];
    $lastName = $user_data['lastName'];
    $address = $user_data['address'];
    $phoneNumber = $user_data['phoneNumber'];
    $email = $user_data['email'];
    $birthDate = $user_data['birthDate'];
    $password = $user_data['password'];
    $age = $user_data['age'];
    $gender = $user_data['gender'];
    $maritalStatus = $user_data['maritalStatus'];
    $citizenship = $user_data['citizenship'];
    $religion = $user_data['religion'];
    $height = $user_data['height'];
    $weight = $user_data['weight'];
    $username = $user_data['username'];
}
?>
<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98a2b5e7f0.js" crossorigin="anonymous"></script>
    <link href="css/userdashboard.css" rel="stylesheet">
    <title>VALORANT</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">User Dashboard</h3>
                <strong>UD</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="userdashboard.php">
                        <i class="fas fa-user-circle"></i>
                        Home
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="active">
                    <a href="#">
                        <i class='far fa-edit'></i>
                        Edit Personal
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='educattain.php?id=$userID'>"; ?>
                    <i class='fas fa-user-graduate'></i>
                    Edit Education
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='educattain.php?id=$userID'>"; ?>
                    <i class="fas fa-trophy"></i>
                    Edit Achievement
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="../PHP/contactUs.php">
                        <i class="fas fa-phone-square-alt"></i>
                        Contact Us
                    </a>
                </li>

            </ul>
        </nav>
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
            <div class="container img-thumbnail p-4 mb-5">
                <div class="panel-body">
                    <div class="container-sign">
                        <form class="signup_form" name="edit_form" method="post" action="edit.php">
                            <h2 class="valoFOnt text-center mb-3">Edit Personal Details</h2>

                            <!-- Personal -->
                            <div class="form-group row">
                                <label for="firstName" class="col-md-3 col-form-label text-md-right">First Name<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input pattern="^[A-Z][a-z]+(?:[-'\s][A-Z][a-z]+)*$" type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required="required" autofocus title="First letter should be Capitalized!" value="<?php echo $firstName; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="middleName" class="col-md-3 col-form-label text-md-right">Middle Name<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input pattern="^[A-Z][a-z]+(?:[-'\s][A-Z][a-z]+)*$" type="text" id="middleName" name="middleName" class="form-control" placeholder="Middle Name" required="required" autofocus title="First letter should be Capitalized!" value="<?php echo $middleName; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-3 col-form-label text-md-right">Last Name<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input pattern="^[A-Z][a-z]+(?:[-'\s][A-Z][a-z]+)*$" type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required="required" autofocus title="First letter should be Capitalized!" value="<?php echo $lastName; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail" class="col-md-3 col-form-label text-md-right">Email<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="ex: myname@example.com" required="required" value="<?php echo $email; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phoneNumber" class="col-md-3 col-form-label text-md-right">Phone Number<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input pattern="^(09|\+639)\d{9}$" type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="required" value="<?php echo $phoneNumber; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthDate" class="col-md-3 col-form-label text-md-right">Date of Birth<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input type="date" id="birthDate" name="birthDate" class="form-control" required="required" value="<?php echo $birthDate; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-3 col-form-label text-md-right">Age<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" id="age" name="age" placeholder="1-85" min="1" max="85" title="Minimun age is 1 and Maximum is 85!" value="<?php echo $age; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-3 col-form-label text-md-right">Gender<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required="required">
                                        <label class="col-form-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required="required">
                                        <label class="col-form-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="maritalStatus" class="col-md-3 col-form-label text-md-right">Marital Status<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <select class="input-group-text form-control" id="maritalStatus" name="maritalStatus" required value="<?php echo $maritalStatus; ?>">
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="citizenship" class="col-md-3 col-form-label text-md-right">Citizenship<span class="text-danger"> *</span> </label>
                                <div class="col-md-9">
                                    <select class="input-group-text form-control" id="citizenship" name="citizenship" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Afghan">Afghan</option>
                                        <option value="Albanian">Albanian</option>
                                        <option value="Algerian">Algerian</option>
                                        <option value="American">American</option>
                                        <option value="Andorran">Andorran</option>
                                        <option value="Angolan">Angolan</option>
                                        <option value="Antiguans">Antiguans</option>
                                        <option value="Argentinean">Argentinean</option>
                                        <option value="Armenian">Armenian</option>
                                        <option value="Australian">Australian</option>
                                        <option value="Austrian">Austrian</option>
                                        <option value="Azerbaijani">Azerbaijani</option>
                                        <option value="Bahamian">Bahamian</option>
                                        <option value="Bahraini">Bahraini</option>
                                        <option value="Bangladeshi">Bangladeshi</option>
                                        <option value="Barbadian">Barbadian</option>
                                        <option value="Barbudans">Barbudans</option>
                                        <option value="Batswana">Batswana</option>
                                        <option value="Belarusian">Belarusian</option>
                                        <option value="Belgian">Belgian</option>
                                        <option value="Belizean">Belizean</option>
                                        <option value="Beninese">Beninese</option>
                                        <option value="Bhutanese">Bhutanese</option>
                                        <option value="Bolivian">Bolivian</option>
                                        <option value="Bosnian">Bosnian</option>
                                        <option value="Brazilian">Brazilian</option>
                                        <option value="British">British</option>
                                        <option value="Bruneian">Bruneian</option>
                                        <option value="Bulgarian">Bulgarian</option>
                                        <option value="Burkinabe">Burkinabe</option>
                                        <option value="Burmese">Burmese</option>
                                        <option value="Burundian">Burundian</option>
                                        <option value="Cambodian">Cambodian</option>
                                        <option value="Cameroonian">Cameroonian</option>
                                        <option value="Canadian">Canadian</option>
                                        <option value="Cape Verdean">Cape Verdean</option>
                                        <option value="Central African">Central African</option>
                                        <option value="Chadian">Chadian</option>
                                        <option value="Chilean">Chilean</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="Colombian">Colombian</option>
                                        <option value="Comoran">Comoran</option>
                                        <option value="Congolese">Congolese</option>
                                        <option value="Costa Rican">Costa Rican</option>
                                        <option value="Croatian">Croatian</option>
                                        <option value="Cuban">Cuban</option>
                                        <option value="Cypriot">Cypriot</option>
                                        <option value="Czech">Czech</option>
                                        <option value="Danish">Danish</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominican">Dominican</option>
                                        <option value="Dutch">Dutch</option>
                                        <option value="East Timorese">East Timorese</option>
                                        <option value="Ecuadorean">Ecuadorean</option>
                                        <option value="Egyptian">Egyptian</option>
                                        <option value="Emirian">Emirian</option>
                                        <option value="Equatorial Guinean">Equatorial Guinean</option>
                                        <option value="Eritrean">Eritrean</option>
                                        <option value="Estonian">Estonian</option>
                                        <option value="Ethiopian">Ethiopian</option>
                                        <option value="Fijian">Fijian</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="Finnish">Finnish</option>
                                        <option value="French">French</option>
                                        <option value="Gabonese">Gabonese</option>
                                        <option value="Gambian">Gambian</option>
                                        <option value="Georgian">Georgian</option>
                                        <option value="German">German</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Greek">Greek</option>
                                        <option value="Grenadian">Grenadian</option>
                                        <option value="Guatemalan">Guatemalan</option>
                                        <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                        <option value="Guinean">Guinean</option>
                                        <option value="Guyanese">Guyanese</option>
                                        <option value="Haitian">Haitian</option>
                                        <option value="Herzegovinian">Herzegovinian</option>
                                        <option value="Honduran">Honduran</option>
                                        <option value="Hungarian">Hungarian</option>
                                        <option value="Icelander">Icelander</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Indonesian">Indonesian</option>
                                        <option value="Iranian">Iranian</option>
                                        <option value="Iraqi">Iraqi</option>
                                        <option value="Irish">Irish</option>
                                        <option value="Israeli">Israeli</option>
                                        <option value="Italian">Italian</option>
                                        <option value="Ivorian">Ivorian</option>
                                        <option value="Jamaican">Jamaican</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Jordanian">Jordanian</option>
                                        <option value="Kazakhstani">Kazakhstani</option>
                                        <option value="Kenyan">Kenyan</option>
                                        <option value="Kittian And Nevisian">Kittian And Nevisian</option>
                                        <option value="Kuwaiti">Kuwaiti</option>
                                        <option value="Kyrgyz">Kyrgyz</option>
                                        <option value="Laotian">Laotian</option>
                                        <option value="Latvian">Latvian</option>
                                        <option value="Lebanese">Lebanese</option>
                                        <option value="Liberian">Liberian</option>
                                        <option value="Libyan">Libyan</option>
                                        <option value="Liechtensteiner">Liechtensteiner</option>
                                        <option value="Lithuanian">Lithuanian</option>
                                        <option value="Luxembourger">Luxembourger</option>
                                        <option value="Macedonian">Macedonian</option>
                                        <option value="Malagasy">Malagasy</option>
                                        <option value="Malawian">Malawian</option>
                                        <option value="Malaysian">Malaysian</option>
                                        <option value="Maldivan">Maldivan</option>
                                        <option value="Malian">Malian</option>
                                        <option value="Maltese">Maltese</option>
                                        <option value="Marshallese">Marshallese</option>
                                        <option value="Mauritanian">Mauritanian</option>
                                        <option value="Mauritian">Mauritian</option>
                                        <option value="Mexican">Mexican</option>
                                        <option value="Micronesian">Micronesian</option>
                                        <option value="Moldovan">Moldovan</option>
                                        <option value="Monacan">Monacan</option>
                                        <option value="Mongolian">Mongolian</option>
                                        <option value="Moroccan">Moroccan</option>
                                        <option value="Mosotho">Mosotho</option>
                                        <option value="Motswana">Motswana</option>
                                        <option value="Mozambican">Mozambican</option>
                                        <option value="Namibian">Namibian</option>
                                        <option value="Nauruan">Nauruan</option>
                                        <option value="Nepalese">Nepalese</option>
                                        <option value="New Zealander">New Zealander</option>
                                        <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                                        <option value="Nicaraguan">Nicaraguan</option>
                                        <option value="Nigerien">Nigerien</option>
                                        <option value="Nigerian">Nigerian</option>
                                        <option value="North Korean">North Korean</option>
                                        <option value="Northern Irish">Northern Irish</option>
                                        <option value="Norwegian">Norwegian</option>
                                        <option value="Omani">Omani</option>
                                        <option value="Pakistani">Pakistani</option>
                                        <option value="Palauan">Palauan</option>
                                        <option value="Panamanian">Panamanian</option>
                                        <option value="Papua New Guinean">Papua New Guinean</option>
                                        <option value="Paraguayan">Paraguayan</option>
                                        <option value="Peruvian">Peruvian</option>
                                        <option value="Polish">Polish</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Qatari">Qatari</option>
                                        <option value="Romanian">Romanian</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Rwandan">Rwandan</option>
                                        <option value="Saint Lucian">Saint Lucian</option>
                                        <option value="Salvadoran">Salvadoran</option>
                                        <option value="Samoan">Samoan</option>
                                        <option value="San Marinese">San Marinese</option>
                                        <option value="Sao Tomean">Sao Tomean</option>
                                        <option value="Saudi">Saudi</option>
                                        <option value="Scottish">Scottish</option>
                                        <option value="Senegalese">Senegalese</option>
                                        <option value="Serbian">Serbian</option>
                                        <option value="Seychellois">Seychellois</option>
                                        <option value="Sierra Leonean">Sierra Leonean</option>
                                        <option value="Singaporean">Singaporean</option>
                                        <option value="Slovakian">Slovakian</option>
                                        <option value="Slovenian">Slovenian</option>
                                        <option value="Solomon Islander">Solomon Islander</option>
                                        <option value="Somali">Somali</option>
                                        <option value="South African">South African</option>
                                        <option value="South Korean">South Korean</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Sri Lankan">Sri Lankan</option>
                                        <option value="Sudanese">Sudanese</option>
                                        <option value="Surinamer">Surinamer</option>
                                        <option value="Swazi">Swazi</option>
                                        <option value="Swedish">Swedish</option>
                                        <option value="Swiss">Swiss</option>
                                        <option value="Syrian">Syrian</option>
                                        <option value="Taiwanese">Taiwanese</option>
                                        <option value="Tajik">Tajik</option>
                                        <option value="Tanzanian">Tanzanian</option>
                                        <option value="Thai">Thai</option>
                                        <option value="Togolese">Togolese</option>
                                        <option value="Tongan">Tongan</option>
                                        <option value="Trinidadian Or Tobagonian">Trinidadian Or Tobagonian</option>
                                        <option value="Tunisian">Tunisian</option>
                                        <option value="Turkish">Turkish</option>
                                        <option value="Tuvaluan">Tuvaluan</option>
                                        <option value="Ugandan">Ugandan</option>
                                        <option value="Ukrainian">Ukrainian</option>
                                        <option value="Uruguayan">Uruguayan</option>
                                        <option value="Uzbekistani">Uzbekistani</option>
                                        <option value="Venezuelan">Venezuelan</option>
                                        <option value="Vietnamese">Vietnamese</option>
                                        <option value="Welsh">Welsh</option>
                                        <option value="Yemenite">Yemenite</option>
                                        <option value="Zambian">Zambian</option>
                                        <option value="Zimbabwean">Zimbabwean</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="religion" class="col-md-3 col-form-label text-md-right">Religion<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <input pattern="^[A-Z][a-z]+(?:[-'\s][A-Z][a-z]+)*$" type="text" id="religion" name="religion" class="form-control" placeholder="Religion" required="required" title="First letter should be Capitalized!" value="<?php echo $religion; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="height" class="col-md-3 col-form-label text-md-right">Height</label>
                                <div class="col-md-9">
                                    <input type="number" id="height" name="height" placeholder="Please write your height in centimetres" class="form-control" value="<?php echo $height; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="weight" class="col-md-3 col-form-label text-md-right">Weight</label>
                                <div class="col-md-9">
                                    <input type="number" id="weight" name="weight" placeholder="Please write your weight in kilograms" class="form-control" value="<?php echo $weight; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAddress" class="col-md-3 col-form-label text-md-right">Address<span class="text-danger"> *</span></label>
                                <div class="col-md-9">
                                    <textarea pattern="^([A-Z0-9]+[\s-]*[A-Z0-9]*)([A-Za-z,.\s]*)$" type="text" id="inputAddress" name="inputAddress" class="form-control" placeholder="Address" required="required"><?php echo $address; ?></textarea>
                                </div>
                                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            </div>

                            <div class="form-group">
                                <center>
                                    <button type="submit" class="btn-danger btn-circle btn-xl" name="update">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="bg-dark text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    <a class="text-light" href="https://www.facebook.com/ronaldvergel.crisostomoii/">Ronald Vergel Dela Cruz</a>
                </div>
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="../JavaScript/js/jquery-3.5.1.slim.js"></script>
    <script type="text/javascript" src="../JavaScript/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>


</body>

</html>