<?php
define("UJSOR", "<br>");
define("UJSZAK", "<br><br>================================<br>");

print UJSZAK;
print "Osztály példa".UJSOR;

class fiu{
    /* Tulajdonságok / properties */
    private  $nev;
    private  $cim;

    /* Metódusok */
    function fiu($pnev, $pcim="Debrecen"){
        $this->nev = $pnev;
        $this->cim = $pcim;
    }

    function getNev(){
        return $this->nev;
    }

    function setCim($pcim){
        if ($this->cim != $pcim)
            $this->cim = $pcim;
    }

    function getCim(){
        return $this->cim;
    }

}

/* Az osztály példányosítása */
$fiu1 = new fiu("Ferenc", "Debrecen");
$fiu2 = new fiu("Árpád", "Pest");
$fiu3 = new fiu("Zalán", "Paks");
$fiu4 = new fiu("Gergö");


print "A fiu1 neve: ".$fiu1->getNev().UJSOR;
$fiu2->setCim("Pécs");
print "A fiu2 címe: ".$fiu2->getCim().UJSOR;
print "A ".$fiu4->getNev()." címe: ".$fiu4->getCim().UJSOR;


?>
