<?php
include('conection.php');

//verificação se há 
if(isset($_POST['email']) || isset($_POST['password_user'])) {

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";
    } else if(strlen($_POST['password_user']) == 0){
        echo "Preencha sua senha";
    } else {
        //para limpar o email e a senha (buscar msqli)
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password_user']);

        //sql query
        $sql_code = "SELECT * FROM users_db WHERE email = '$email' AND password_user = '$password' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

        //the number of registers / vai retornar qunatas linhas essa consulta retornou
        //CASO O RETORNO SEJA 0, NÃO HÁ EMAIL OU SENHA CORRESPONDENTE NA BASE DE DADOS
        $qt = $sql_query->num_rows; 

        if($qt == 1) {

            $user = $sql_query->fetch_assoc(); // pegar os dados e inserir nessa variável

            if(!isset($_SESSION)) { //comeãr uma sessao, caso não haja uma anteriormente
                session_start();  
            }
            
            //session é um tipo de variável, que mesmo a pessoa sendo válida, ela troca de página - pesquisar
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header("Location: page.php"); //vai direcionar esse header, pelo HTTP, para O NAVEGADOR redirecionar o usuário para essa página

        } else {
            echo "FALHA AO LOGAR! EMAIL OU SENHA INCORRETOS";
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
    <title>Página de Login</title>
    <meta name="description" content="Página de Teste">
    <meta name="author" content="Gilberto Santos">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="/assets/img/img-icon.png">

</head>

<body>
    <div>
        <h1>Área de Login</h1>
        <form method="POST" action="">
            <input class="input" name="email" type="email" placeholder="Digite seu e-mail" required>
            <br><br>
            <input class="input" name="password_user" type="password" placeholder="Digite sua senha" required>
            <br><br>
            <input class="sub-button" type="submit" value="Fazer Login">
        </form>
    </div>

</body>

</html>