<?php

if(!isset($_SESSION)){
    session_start();  
}

if(!isset($_SESSION['id'])) // There is no session Id
    die(include ('protect_layout.php'));
?>
