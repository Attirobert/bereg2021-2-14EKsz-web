<?php
function checkNum($number){
    if ($number > 1) {
        throw new Exception("A szám csak 1 vagy annál kisebb lehet!");
    }

    return true;
}

try {
    checkNum(10);
    print "Jó számot adtál meg";
} catch (Exception $th) {
    print "Hiba: ". $th->getMessage();
}
