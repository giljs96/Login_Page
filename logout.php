<?php
 if(!isset($_SESSION)){
    session_start();  
}

// destroy the variables
session_destroy();

//redirecionar o usuário para a página de login 
header("Location: index.php");