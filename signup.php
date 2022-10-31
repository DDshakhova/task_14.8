<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <body class="signup-bd">
        <div class="container">
        <form method="post" action="process.php">
            <h2 class="title">Создание учётной записи</h2>
            <div class="tip">
                Создайте учётную запись для авторизации на сайте
            </div>
        <?php
if(isset($_SESSION['error'])){
echo '<div class="errorMsg">'. $_SESSION['error'] .'</div>';
unset($_SESSION['error']);
}
?>      
        <label for="name">Имя пользователя</label>
        <input type="text" name="login" id="login" placeholder="Логин" required >
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" placeholder="Пароль" required >
        <br>
        <label for="birthday">День рождения</label>
        <input type="date" name="birthday" id="birthday">
        <input type="submit" value="Зарегистрироваться">
        </form>
            <div class="link">
            Уже зарегистрированы? <a href="login.php">Войдите</a>
            </div>
        </div>
    </body>
</html>