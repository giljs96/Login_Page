<?php
include ('protect.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <link rel="shortcut icon" type="imagex/png" href="img-icon.png">
    <title>Page</title>
</head>
<body>
    <div class="logged-in">
        <h1>Welcome to the new page, you're logged in!<br><?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>