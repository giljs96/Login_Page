<?php

if(!isset($_SESSION)){
    session_start();  
}

if(!isset($_SESSION['id'])) // There is no session Id
    die("You cannot access this page. You are not logged in! <p><a href=\"index.php\">ENTRAR</a></p>")
?>