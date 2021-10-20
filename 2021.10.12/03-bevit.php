<?php
print "Üdvözlöm <b> ".$_GET["felhasznalo"]."</b>!<br><br>";
print "A címe <b> ".$_GET["cim"]."</b>!<br><br>";

print "A következő termékeket választotta:";
print "<ul>";
    foreach ($_GET["szerszamok"] as $szerszam)
        print "<li>".$szerszam."</li>";
print "</ul><br>";

print "A következő terméket választotta:";
print "<ul>";
    foreach ($_GET["termekek"] as $termek)
        print "<li>".$termek."</li>";
print "</ul><br>";

print "Szín: ".$_GET["szin"]."<br>";
?>
