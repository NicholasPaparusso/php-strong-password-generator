<?php

$chars= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';

$minPswLen = 8 ;

$maxPswLen = 32 ;

$psw = substr(str_shuffle($chars), $minPswLen, $_GET['pswLen']);

$pswLen = $_GET['pswLen'];

var_dump($psw)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css' integrity='sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="./assets/style.css">
  
  <title>PHP Strong Password Generator</title>

</head>
<body class="d-flex align-items-center">
  <div class="np-container container d-flex flex-column align-items center justify-content center">

    <header>
        <h1 class="text-center py-4">PHP Strong Password Generator</h1>
    </header>
 
      <form action="./index.php">

        <label for="pswcount">Scegli il numero di caratteri per la tua password</label>   
        <select name="pswLen" id="pswcount">

          <?php for($i = $minPswLen; $i <= $maxPswLen; $i++){
            echo "<option value='$i'> $i </option>" ;
          } ?>
          
        </select>
        
        <input type="submit">
      </form>

      <div class="output">
        <h5>La tua password sarà</h5>  
        <?php echo $psw ; ?>
      </div>

  </div>
</body>
</html>