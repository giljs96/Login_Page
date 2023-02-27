<?php
include ('protect.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    Welcome to this new page, <?php echo $_SESSION['name']; ?>
    <p>
        <a href="logout.php">Logout</a>
    </p>
</body>
</html>