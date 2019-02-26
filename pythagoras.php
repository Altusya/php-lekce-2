<?php
$a = 3;
$b = 5;
$obdelnikobsah = $a * $b;

$strana = 6;
$uhel = 60;
$uhelrad = deg2rad($uhel);

$vyska = $strana * sin($uhelrad);

$trojuhelnikobsah = $strana * $vyska /2;


echo 'Obsah obdelníku o stranách '; echo $a; echo ' cm a '; echo $b; echo ' cm'; echo ' je '; echo $obdelnikobsah; echo ' cm^2'; ?>
</br></br>
    <?php
echo 'Rovnostranný trojúhelník o straně délky '; echo $strana; echo ' cm a úhlu '; echo $uhel; echo '° je '; echo $trojuhelnikobsah; echo ' cm^2';

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 26.02.2019
 * Time: 23:33
 */