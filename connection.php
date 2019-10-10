<?php 
session_start();

$DB_CONNECTION = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'avengershouse';

//Open a new connection to the MySQL server
$mysqli = new mysqli($DB_CONNECTION, $DB_USER, $DB_PASSWORD, $DB_NAME);

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

?>