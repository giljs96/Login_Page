<?php
include('conection.php');

//this block checks for information in the database
if(isset($_POST['email']) || isset($_POST['password_user'])) {


    if(strlen($_POST['email']) == 0){
        echo "Please type your email";
    } else if(strlen($_POST['password_user']) == 0){
        echo "Please type your password";
    } else {
        
        //this code block has the function of clearing the email and password -(search for msqli)-
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password_user']);

        //sql query in the database
        $sql_code = "SELECT * FROM users_db WHERE email = '$email' AND password_user = '$password' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

        //the number of registers 
        // it will return how many rows this query returned
        //if the return is 0, there's no corresponding email or password in the database
        $qt = $sql_query->num_rows; 

        //
        if($qt == 1) {

            // take the data and insert it into this variable
            $user = $sql_query->fetch_assoc(); 

            //it will start a session if there wasn't one previously
            if(!isset($_SESSION)) { 
                session_start();  
            }
            
            //to search
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            // it will change the request header
            // it will direct this header, via HTTP, to THE BROWSER to redirect the user to this page
            header("Location: page.php"); 

        } else {
            echo "Login failed, incorrect email or password!";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <meta name="description" content="Página de Teste">
    <meta name="author" content="Gilberto Santos">
    <link rel="stylesheet" href="style.php">
    <link rel="shortcut icon" type="imagex/png" href="/assets/img/img-icon.png">

</head>

<body>
    <div>
        <h1>Login Area</h1>
        <form method="POST" action="">
            <input class="input" name="email" type="email" placeholder="Type your e-mail" required>
            <br><br>
            <input class="input" name="password_user" type="password" placeholder="Type your password" required>
            <br><br>
            <input class="sub-button" type="submit" value="Login">
        </form>
    </div>

</body>

</html>