<?php

$user = 'root';
$password = '';
$database = 'login_db';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados.".$mysqli->error);
}

