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
     'admin' => ['id' => '1', 'password' => '789d743a205201340d53eea0319f1f16'],
     'user1'=> ['id' => 'coidzumi', 'password' => 'e10adc3949ba59abbe56e057f20f883e'],
     'user2'=> ['id' => 'user', 'password' => 'c33367701511b4f6020ec61ded352059'],
];

switch (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    case md5($password) === $users['admin']['password']:
    
         // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username; 
        break;
    case md5($password) === $users['user1']['password']:
    
            // Стартуем сессию:
           session_start(); 
           
           // Пишем в сессию информацию о том, что мы авторизовались:
           $_SESSION['auth'] = true; 
           
           // Пишем в сессию логин и id пользователя
           $_SESSION['id'] = $users['user1']['id']; 
           $_SESSION['login'] = $username; 
           break;
    case md5($password) === $users['user2']['password']:
    
            // Стартуем сессию:
           session_start(); 
           
           // Пишем в сессию информацию о том, что мы авторизовались:
           $_SESSION['auth'] = true; 
           
           // Пишем в сессию логин и id пользователя
           $_SESSION['id'] = $users['user2']['id']; 
           $_SESSION['login'] = $username; 
           break;
        default:
        echo 'Пользователя с таким логином или паролем не существует. <a href="login.php">Повторный вход</a>';

    }

    
$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
    header ("location: index.php")
?>


<?php }

