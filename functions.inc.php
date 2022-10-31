<?php



function hello(){
$welcome='Добро пожаловать, ';
return $welcome;
  }
  
/* Организована система хранения паролей, (например, хранение пары логин – хэш пароля в файле)*/
function fetchLocalJSON(){
    $strData='usersData.json';
    $strFileHandle = fopen($strData,'r') or exit('Файл недоступен!');
    $strUsers = fread($strFileHandle,filesize($strData));
    fclose($strFileHandle);
    return $strUsers;
}

/* функция getUsersList() возвращает массив всех пользователей и хэшей их паролей; */
function getUsersList($strData='local_json'){
    switch ($strData) {
        case 'local_json':
          $arrReturned=(json_decode(fetchLocalJSON(),1))['Users'];
            break;
        default:
          $arrReturned=(json_decode(fetchLocalJSON(),1))['Users'];
      }
    return $arrReturned;
}

/* функция existsUser($login) проверяет, существует ли пользователь с указанным логином; */
function existsUser($login){
    $arrUsers=getUsersList();
    $strExist=0;
    foreach($arrUsers as $arrProperties) {
        if ($login === $arrProperties['login']) $strExist=1;
      }
    return (bool)$strExist;
}

/* функция checkPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку, иначе — false; */
function checkPassword($login, $password){
    $arrUsers=getUsersList();
    $strVerified=0;
    foreach($arrUsers as $arrProperties) {
        if (($login === $arrProperties['login']) && (sha1($password) === $arrProperties['password hash'])) $strVerified=1;
      }
    return (bool)$strVerified;
}
// i.e., admin:132432

/* функция getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null. */
function getCurrentUser(){
    return isset($_SESSION['auth']) ? $_SESSION['login'] : null;
}
?>