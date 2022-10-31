<?php
echo '<pre>';
echo 'REQUEST: ' . PHP_EOL;
var_dump($_REQUEST);
echo 'GET REQUEST: ' . PHP_EOL;
var_dump($_GET);
echo 'POST REQUEST: ' . PHP_EOL;
var_dump($_POST);


$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// зададим книгу паролей
$users = [
     'admin' => ['id' => '1', 'password' => '132432'],
     'user1'=> ['id' => 'coidzumi', 'password' => '123456'],
];


if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['admin']['password']) {
    
         // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username; 

    }
}

    
$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
?>
// контент для администратора
    <a href="index.php">Вернуться на главную</a>

<?php }

// {
//     "Users": {
//         "1": {
//             "login": "user",
//             "password hash": "12dea96fec20593566ab75692c9949596833adc9",
//             "birthday date": "",
//             "role": "user"
//         },
//         "2": {
//             "login": "admin",
//             "password hash": "1e8923210ec0499314a6b2b83c5b7c78bfb204d3",
//             "birthday date": "2022-10-27",
//             "role": "admin"
//         }
//     }
// }