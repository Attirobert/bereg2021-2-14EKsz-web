<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session példa</title>
    <meta name="Author" content='Kovács Attila'>
</head>
<body>
    <?php
        // Session változók beállítása
        $_SESSION["favcolor"] = "zöld";
        $_SESSION["allat"] = "macska";

        print "Session változók beállítva";
    ?>
</body>
</html>