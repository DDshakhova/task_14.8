<?php

function hello(){
$welcome='Добро пожаловать, ';
return $welcome;
  }


 
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
  
  
  function getCurrentUser():?string{
      $loginFromCookie = $_COOKIE['login'] ?? '';
      $passwordFromCooie = $_COOKIE['password'] ?? '';
      if (checkPassword($loginFromCookie, $passwordFromCooie)){
          return $loginFromCookie;
      }
  
      return null;
  }
  
  ?>