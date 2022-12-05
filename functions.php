<?php

$chars= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';

$minPswLen = 8 ;

$maxPswLen = 32 ;

if(!empty($_GET['pswLen'])){

  session_start();
  
  $_SESSION['pswLen'] = $_GET['pswLen'];
  
  ('Location: ./landing.php');
}

function pswGenerator($min,$max,$chararachters){
  if(!empty($max)){
    return substr(str_shuffle($chararachters), $min, $max);
  }
}
?>