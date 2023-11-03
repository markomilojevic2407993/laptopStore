<?php    





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div>
        <a href="index.php" class="home">Home</a>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <?php if(isset($_SESSION['email'])):?>
        <?php if(session_status()==PHP_SESSION_NONE){
             session_start();
                }
            $_SESSION['email'];?>
        <p>Pozdrav: <?=$_SESSION['email']?></p>
        <a href="model/logout.php">logout</a>
        <?php else:?>
    <div class="loginHtml">
    <form action="model/login.php" method="post">
        <input type="text" name="email" placeholder="Unesite email" required><br>
        <input type="text" name="pass" placeholder="Unesite password" required><br>
        <button type="submit">Login</button><br>
    </form>
    <a href="regisst.php">Registruje se</a>
    </div>
    <?php endif;?>
</body>
</html>