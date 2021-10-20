<?php
    $nev = $_GET["felhasznalo"];
    $cim = $_GET["cim"];
    $szin = $_GET["szin"];
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Példa</title>
</head>
<body>
Üdvözlöm <b> <?php print $nev ?></b>!<br><br>
A címe <b> <?php print $cim ?></b>!<br><br>
A következő termékeket választotta:
<ul>
<?php foreach ($_GET["szerszamok"] as $szerszam)
        print "<li>".$szerszam."</li>"; ?>
</ul><br>
A következő terméket választotta:
<ul>
<?php foreach ($_GET["termekek"] as $termek)
       print "<li>".$termek."</li>"; ?>
</ul><br>

Szín: <?php print $szin ?><br>;

</body>
</html>