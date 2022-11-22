<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher_Portal</title>
  <style>
    body {
      background-image: url(./appointment.jpg);
    }

    .nav {
      top: 20px;
      width: 600px;
      right: 20px;
      display: inline;
      position: absolute;
      font-size: 30px;
    }

    .nav>a {
      margin: 40px;
      display: inline;
      color: white;
      text-decoration: none;
      transition: 0.5s;
    }

    img {
      width: 500px;
      height: 329px;
      border-radius: 8px;
      margin-left: 112px;
      margin-top: 38px;
    }

    button {
      width: 110px;
      height: 34px;
      margin-top: 230px;
      margin-left: -162px;
    }
  </style>
</head>

<body>
<div class="nav">

  <a href="#">Home </a>
  <a href="#">About </a>
  <a href="#">help</a>
    <?php  include_once 'tlogin.php' ?>
  <img src="./Teacher1.jpg" alt="">

  <button>Allow</button>


</body>
</html>