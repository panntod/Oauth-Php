<?php
session_start();
if (!isset($_SESSION['info']['email'])) {
   header('location: sign_in.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="form-card">
      <img src="<?= $_SESSION['info']['picture'] ?>" alt="">
      <div class="card">
         <p>
            Welcome,<span>
               <?= $_SESSION['info']['name'] ?>
            </span>
         </p>
         <p>
            Email: <span>
               <?= $_SESSION['info']['email'] ?>
            </span>
         </p>
         <a href="logout.php" class="logout">LogOut</a>
      </div>

   </div>
</body>

</html>