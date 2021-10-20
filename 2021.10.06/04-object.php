<?php
define("UJSOR", "<br>");
define("UJSZAK", "<br><br>================================<br>");

print UJSZAK;
print "Származtatás példa".UJSOR;

/* Alaposztály */
class Alkalmazott{
    private $nev;
    private $lakcim;
    private $szuldatum;

    function __construct($nev, $lakcim, $szuldatum){
        $this->nev = $nev;
        $this->lakcim = $lakcim;
        $this->szuldatum = $szuldatum;
    }

    function getNev(){
        return $this->nev;
    }

    function getlakcim(){
        return $this->lakcim;
    }

    function getszuldatum(){
        return $this->szuldatum;
    }
}

$alk1 = new Alkalmazott("Béla", "Paks", "1998");
print $alk1->getNev()." címe : ".$alk1->getlakcim().", született: ".$alk1->getszuldatum().UJSOR;

class Mernok extends Alkalmazott{
    private $kepzettseg;

    function __construct($nev, $lakcim, $szuldatum, $kepzettseg){
        Alkalmazott::__construct($nev, $lakcim, $szuldatum);
        $this->kepzettseg = $kepzettseg;
    }

    function getKepzettseg(){
        return $this->kepzettseg;
    }
}

$mernok1 = new Mernok("Ádám", "Pápa", 2000, "útépítő");

print $mernok1->getNev()." címe : ".$mernok1->getlakcim().", született: ".$mernok1->getszuldatum().", képzettsége: ".$mernok1->getKepzettseg().UJSOR;

?>