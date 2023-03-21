<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojo-Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./Styles/Index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pojo-Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Addmision</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cources</a>
        </li>

      </ul>
      
    </div>
    
      <button class="btn btn-success" id="login" type="submit"><a href="login.php" class="nav-link" >Login</a></button>
      <button class="btn btn-success" type="submit"><a href="register.php" class="nav-link">Register</a></button>
  </div>
</nav>

<div class="section1">
    <label class="img_text" >We are heare to teach you</label>
    <img src="./images/main.jpg" class="main_img" alt="Home">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="wel_img" src="./images/1.jpg" alt="">
        </div>
        <div class="col-md-8">
            <h1>Welcome to Pojo-Academy</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio velit ad voluptas ipsam nihil similique excepturi? Expedita, sed impedit? Labore tempora laboriosam molestias fuga omnis minus quia odit recusandae illo eveniet?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio velit ad voluptas ipsam nihil similique excepturi? Expedita, sed impedit? Labore tempora laboriosam molestias fuga omnis minus quia odit recusandae illo eveniet?</p>
          
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>