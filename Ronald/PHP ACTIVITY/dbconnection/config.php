<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'db_activity';
$databaseUsername = 'root';
$databasePassword = '';

$db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>