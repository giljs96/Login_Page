<?php

if(!isset($_SESSION)){
    session_start();  
}

if(!isset($_SESSION['id'])) // não tem nenhuma sessão ID
    die("Você não pode acessar essa pagina. Não está logado. <p><a href=\"index.php\">ENTRAR</a></p>")
?>