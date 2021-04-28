<?php
// include database connection file
include_once("dbconnection/config.php");

// Getid from URL to delete that user
$achievementID = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM `achievement` WHERE `achievement`.`achievement_id` = '$achievementID'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:achievements.php");
?>