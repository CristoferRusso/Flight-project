<?php
session_start();
require 'db.php';
require 'header.php';



?>


<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<link href="style/loginStyle.css" rel="stylesheet">
<link href="style/style1.css" rel="stylesheet">



<?php
    

   

?>
<main class="form-signin w-100 m-auto">

  <?php
  if (!empty($_SESSION['errors'])) {  ?>

    <div class="alert alert-danger" style=" width: 100%; padding:30px; "> <?= $_SESSION['errors'] ?></div>

  <?php
    //Se la pagina viene ricaricata il parametro errors si svuota per evitare che ricompaia nel ricaricare la pagina
    $_SESSION['errors'] = '';
  } else if (isUserLoggedIn()) { ?>
    <div class="alert alert-success" style=" width: 100%; padding:30px;"> <?= $_SESSION['messageRegistration'].$users->welcome()?></div>
  <?php }
  $_SESSION['errors'] = '';
  ?>




  <form class='form' method="POST" action="register_logic.php">

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <h3>Register to view and book our flights</h3>
    <div class="form-floating">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="form-floating">
      <label for="password">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Yuor name">
    </div>
    <div class="form-floating">
      <label for="password">Surname</label>
      <input type="text" class="form-control" id="surname" name="surname" placeholder="Yuor surname">
    </div>
    <div class="form-floating">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-top: 10px;">Sign in</button>
    <h6 style="margin-top: 60px;">If you are already registered log in</h6>
    <a href="login.php" class="btn btn-lg btn-primary">Login</a>

    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
<?php

