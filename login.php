<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Вход</title>
       
    </head>   
<?php
session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
  <body class="login-bd">
        <div class="container">
            <form method="post" action="usersData.php">
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

<?php }

else header("location: index.php")
// контент для администратора

?>


<?php

if (!empty($_POST)){
    
    require "functions.inc.php";

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $date = $_POST['dateOfBirth'] ?? '';
    
    if (checkPassword($login, $password)){
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        setcookie('dateOfBirth', $date, 0, '/');
        header('Location: index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
