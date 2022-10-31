<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Вход</title>
       
    </head>   
<?php session_start();

// $auth = $_SESSION['auth'] ?? null;

// if(!$auth) { ?>

    <body class="login-bd">
        <div class="container">
            <form method="post" action="process.php">
                <h2 class="title">Вход</h2>
                <div class="link">Войдите или <a href="signup.php">зарегистрируйтесь на сайте</a>
                <br>
                <input name="login" type="text" placeholder="Логин" required>
                <br>
                <input name="password" type="password" placeholder="Пароль" required>
                <br>
                <input name="submit" type="submit" value="Войти">   
            </form>
        </div>
   </body>
</html>
    
<!-- раскомм и дописать хвост -->