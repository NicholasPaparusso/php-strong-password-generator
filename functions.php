<?php


function generatePassword($length, $listChars, $characters){
  $psw = '';

  $totalLength = 0;

  foreach($characters as $charIndex){

    $totalLength += strlen($listChars[$charIndex]);
    
  }


  if($length > $totalLength) $length = $totalLength;


  while(strlen($psw) < $length){

    $char = getChar($listChars, $characters);


    if($_GET['allow-duplicates'] || !str_contains($psw, $char)){
      $psw .= $char;
    }

  }


  return $psw;
}


function getChar($listChars, $characters){

  $index = $characters[rand(0, count($characters) -1 )];

  $charStr = $listChars[$index];

  return $charStr[rand(0, strlen($charStr) - 1)];
}