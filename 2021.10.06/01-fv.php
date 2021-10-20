<?php
define("UJSOR", "<br>");
define("UJSZAK", "<br><br>================================<br>");

print UJSZAK;
print "Dinamikus függvényhívás".UJSOR;

function fv5($p1){
    print "Én a fv5() függvény vagyok Paraméterem: ".$p1.UJSOR;
}

function fv6($p1){
    print "Én a fv6() függvény vagyok Paraméterem: ".$p1.UJSOR;
}

print "fv5 dinamikus meghívása".UJSOR;
$f = 'fv5';
$f(100);

print "fv6 dinamikus meghívása".UJSOR;
$f = 'fv6';
$f(25);

print UJSZAK;
print "Visszatérési érték".UJSOR;

function fv7($p1){
    return $p1*100;
}

$e = fv7(9);
print "Az fv7 visszatérési értéke: $e".UJSOR;

$e = fv5(9);
print "Az fv5 visszatérési értéke: $e".UJSOR;
?>