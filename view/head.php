<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

   

    <title>Hello, world!</title>
  </head>
  <body>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link" href="index.php">Home</a>
  
  

    <?php 
      session_start();
      if (isset($_SESSION["username"])) {?>
        <a class="nav-item nav-link" href="#"><?php echo $_SESSION["username"];?></a>
     <?php }else {?>
        <a class="nav-item nav-link" href="login.php"> Login </a>
      <?php }
      ?>
  </a>
  <?php 
    if (isset($_SESSION["username"])) {?>
      <a class="nav-item nav-link" href="../controller/logout.php" tabindex="-1" aria-disabled="true">Logout</a>
      <?php if ($_SESSION["role"]==="admin") { ?>
        <a class="nav-item nav-link" href="back/lte/index.php" tabindex="-1" aria-disabled="true">Deshboard</a>
     <?php } ?>
    <?php }else { ?>
      <a class="nav-item nav-link" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
   <?php }?>
  
</nav>
</header>