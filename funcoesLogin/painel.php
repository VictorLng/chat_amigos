<?php
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>Seja bem vindo <?php echo $_SESSION['nome']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>