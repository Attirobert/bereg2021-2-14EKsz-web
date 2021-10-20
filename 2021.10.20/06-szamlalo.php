<?php
    // Fájl megnyitása olvasásra
    $file1=fopen("szamlalo.txt","r");

    // Fájl beolvasása soronként
    while (!feof($file1)) {
        $a=fgets($file1);
        print ($a."<br>");
    }

    // Fájl lezárása
    fclose($file1);

    // Fájl megnyitása olvasásra
    $file1=fopen("szamlalo2.txt","r");

    // Fájl beolvasása soronként
    while (!feof($file1)) {
        $b=fgetc($file1);
        $b=(int)$b;
        switch ($b) {
            case 1:
                print ("<img src='kep1.jpg' height='400'>");
                break;
            case 2:
                print ("<img src='kep2.jpg' height='400'>");
                break;
            
            default:
            print ("<img src='kep3.jpg' height='400'>");
        break;
        }
    }
?>