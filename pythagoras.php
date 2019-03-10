<?php
$a = 3;
$b = 5;
$obdelnikobsah = $a * $b;

$strana = 6;
$uhel = 60;
$uhelrad = deg2rad($uhel);

$vyska = $strana * sin($uhelrad);

$trojuhelnikobsah = round($strana * $vyska /2); ?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="icon" href="favicon.ico">-->
        <link rel="shortcut icon" href="faviconlambda.ico">

        <title>Starověká matematika</title>

        <!-- Bootstrap core CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="starter-template.css" rel="stylesheet">

        <link href="jumbotron.css" rel="stylesheet">
    </head>

    <body>

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
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Hledat</button>
            </form>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="row">
            <div class="col-4">
                <h2 class="display-4">obdelník</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Šířka</td>
                        <td><?php echo $a; ?></td>
                    </tr>
                    <tr>
                        <td>Délka</td>
                        <td><?php echo $b; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Obsah obdelníku o stranách " . $a . "cm a " . $b . "cm" . " je " . $obdelnikobsah . "cm^2"; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-7">
                <h2 class="display-4">trojúhelník</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Strána</td>
                        <td><?php echo $strana; ?></td>
                    </tr>
                    <tr>
                        <td>Úhel</td>
                        <td><?php echo $uhel; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="lead"><?php echo 'Obsah rovnostranného trojúhelníku o straně délky ' . $strana . 'cm a úhlu ' . $uhel . '° je ' . $trojuhelnikobsah . ' cm^2'; ?></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
        <div class="jumbotron" style="background-color: #e3f2fd;">
            <div class="container">
                <h1 class="display-4">  Archimedes</h1>
            </div>
        </div>
    <div class="container">
        <div class="row">
        <div class="col-4">

            <p>
                <img src="https://thumbs.dreamstime.com/thumblarge_6061/60611794.jpg" class="img-fluid" alt="Responsive image">
            </p>
        </div>

        <div class="col-8">
            <p>
            Řecký vynálezce, matematik a fyzik Archimédes se pravděpodobně narodil roku 287 před naším letopočtem. Jeho otcem byl astronom Fidius. Většinu svého života prožil Archimédes v sicilských Syrakusách (odtud pochází také jeho přízvisko). Archimédes žil v období rozkvětu řecké kultury a vzdělanosti v 6. až 4. století př. n. l. Archimédes spolupracoval mj. s matematiky Kononem a Eratosthenem, kteří žili v Alexandrii.

            Podle dostupných údajů svá díla Archimédes napsal až po 40. roku života. Archimédes se věnoval inženýrské činnosti (mj. zavedl pojem těžiště a určil metodiku zjištění polohy těžiště pro rovinné útvary a prostorová tělesa, stavba válečných strojů), geometrii (přibližné určení čísla π výpočty obsahu rovinných geometrických obrazců a objemu geometrických těles), matematické fyzice (statika a hydrostatika) a astronomii.

            Archimédova díla se v originálech nezachovala. Nejstarší dostupné jsou jen přepisy a překlady (především arabské).
            </p>
        </div>
        </div>
    </div>

            <footer style="background-color: #e3f2fd;">
                <p>© Programators fandí starověkým matematikům</p>
            </footer>


</html>
