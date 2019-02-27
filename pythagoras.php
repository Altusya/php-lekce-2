<?php
$a = 3;
$b = 5;
$obdelnikobsah = $a * $b;

$strana = 6;
$uhel = 60;
$uhelrad = deg2rad($uhel);

$vyska = $strana * sin($uhelrad);

$trojuhelnikobsah = $strana * $vyska /2; ?>

</br>

            <div class="container">
            <h1 class="display-4">obdelník</h1>
            <p class="lead"><?php echo 'Obsah obdelníku o stranách '; echo $a; echo ' cm a '; echo $b; echo ' cm'; echo ' je '; echo $obdelnikobsah; echo ' cm^2'; ?></p>
        </div>

    <div class="container">
        <h1 class="display-4">trojúhelník</h1>
        <p class="lead"><?php
            echo 'Rovnostranný trojúhelník o straně délky '; echo $strana; echo ' cm a úhlu '; echo $uhel; echo '° je '; echo $trojuhelnikobsah; echo ' cm^2'; ?></p>
    </div>

    <div class="container">
        <h1 class="display-4">Archimedes</h1>
        <p class="lead"> <img src="https://thumbs.dreamstime.com/thumblarge_6061/60611794.jpg" class="img-fluid" alt="Responsive image" > </p>
    </div>






    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
    </head>


<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="#">Starověká matematika</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Archimedes </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Euklides</a>
          </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Eratosthenes</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Zde napíš, co hledáš" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
        </form>
      </div>
    </nav>
    <main role="main" class="container">

        <div class="starter-template">

            <footer class="container" style="background-color: #e3f2fd;">
                <p>© Programators fandí starověkým matematikům</p>
            </footer>


<?php

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 26.02.2019
 * Time: 23:33
 */