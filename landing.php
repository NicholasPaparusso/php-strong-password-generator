<?php 

include './functions.php';

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

  <title>Landing page</title>
</head>
<body class="d-flex align-items-center">
  <div class="np-container container d-flex flex-column align-items center justify-content center">

    <header>
        <h1 class="text-center py-4">PHP Strong Password Generator</h1>
    </header>

      <div class="output">
        <h5>La tua password sarà:</h5>  
        <?php echo pswGenerator($minPswLen,$_SESSION['pswLen'],$chars) ; ?>
      </div>

   
        <a class="btn w-50 btn-info mt-3" href="./index.php">Crea un'altra password</a>

  </div>
</body>
</html>