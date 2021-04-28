<?php
session_start();
include('dbconnection/config.php');

// initializing variables
$inputUser = "";
$inputEmail = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['regButton'])) {
  // receive all input values from the form
    
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($db, $_POST['middleName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    $birthDate = mysqli_real_escape_string($db, $_POST['birthDate']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($db, $_POST['maritalStatus']);
    $citizenship = mysqli_real_escape_string($db, $_POST['citizenship']);
    $religion = mysqli_real_escape_string($db, $_POST['religion']);
    $height = mysqli_real_escape_string($db, $_POST['height']);
    $weight = mysqli_real_escape_string($db, $_POST['weight']);
    $inputAddress = mysqli_real_escape_string($db, $_POST['inputAddress']);
    
    $inputUser = mysqli_real_escape_string($db, $_POST['inputUser']);
    $inputEmail = mysqli_real_escape_string($db, $_POST['inputEmail']);
    $inputPass = mysqli_real_escape_string($db, $_POST['inputPass']);
    $confirmPass = mysqli_real_escape_string($db, $_POST['confirmPass']);
    /*
    $schoolName = mysqli_real_escape_string($db, $_POST['schoolName']);
    $schoolLevel = mysqli_real_escape_string($db, $_POST['schoolLevel']);
    $inclusiveYear = mysqli_real_escape_string($db, $_POST['inclusiveYear']);
    
    $achSName = mysqli_real_escape_string($db, $_POST['achSName']);
    $achidesc = mysqli_real_escape_string($db, $_POST['achidesc']);
    */
  // form validation: ensure that the form is correctly filled ...
  if ($confirmPass != $inputPass) {
  	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM personal_details WHERE username='$inputUser' OR email='$inputEmail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $inputUser) {
      array_push($errors, "Username already exists!");
    }

    if ($user['email'] === $inputEmail) {
      array_push($errors, "Email already exists!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO `personal_details` (`firstName`, `middleName`, `lastName`, `username`, `password`, `email`, `phoneNumber`, `birthDate`, `age`, `gender`, `maritalStatus`, `citizenship`, `religion`, `height`, `weight`, `address`) VALUES ('$firstName','$middleName','$lastName','$inputUser','$inputPass','$inputEmail','$phoneNumber','$birthDate','$age','$gender','$maritalStatus','$citizenship','$religion','$height','$weight','$inputAddress')";
      //,'$inputUser', '$inputPass','$inputEmail','$schoolName','$schoolLevel','$inclusiveYear','$achSName','$achidesc'
  	mysqli_query($db, $query);
      
  	header('location: index.php');
  }
}

?>
