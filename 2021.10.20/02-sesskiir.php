<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session kiíratás</title>
    <meta name="Author" content='Kovács Attila'>
</head>
<body>
    <?php
        print "A kedvenc állatom a ".$_SESSION["allat"]."<br>";
        print "A színe: ".$_SESSION["favcolor"];
    ?>
</body>
</html>