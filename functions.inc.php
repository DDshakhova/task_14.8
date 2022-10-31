<?php




 
  function getUsersList(){ 
      return require 'usersData.php';
  }
  

  function existsUser($login){
      $users = getUsersList();
  
      foreach ($users as $user){
          if ($user['login'] === $login){
                  return true;
              }
      }
  
      return false;
  }
  

  function checkPassword(string $login, string $password){
      $users = getUsersList();
  
      if (existsUser($login))
      {
          foreach ($users as $user){
              if ($user['login'] === $login &&
                 password_verify($password, $user['password'])){
                      return true;
                  }
          }
      }
   
      return false;
  }
  
  
  function getCurrentUser(){
    return isset($_SESSION['auth']) ? $_SESSION['login'] : null;
  }
  ?>