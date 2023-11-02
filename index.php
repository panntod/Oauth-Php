<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
      <img src="<?= $_SESSION['info']['picture'] ?>" alt="">
      <p class="bold">Welcome!</p>
      <p class="medium"><?= $_SESSION['info']['name'] ?></p>
      <p class="medium"><?= $_SESSION['info']['email'] ?></p>
      <p class="medium"><?= $_SESSION['info']['address'] ?></p>
      <p class="medium"><?= $_SESSION['info']['birthdate'] ?></p>
      <a href="logout.php" class="btn btn-primary">LogOut</a>
   </div>   
</body>
</html>