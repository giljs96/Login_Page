<?php

//database connection 

$user = 'root';
$password = '';
$database = 'login_db';
$host = 'localhost';


// creation of a mysqli object
$mysqli = new mysqli($host, $user, $password, $database);

// if there is an error, it will be reported
if($mysqli->error) {
    die("Failed to connect to database.".$mysqli->error);
}

