<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session törlése</title>
    <meta name="Author" content='Kovács Attila'>
</head>
<body>
    <?php
        print("A session tömb tartalma: ");
        print_r($_SESSION);
        session_destroy();
        print("<br>A session tömb tartalma törölve <br>");
        print("A session tömb új tartalma: ");
        print_r($_SESSION);

        //  Új érték beállítása
        $_SESSION["favcolor"]="hupikék";
        $_SESSION["allat"]="viziló";
        
    ?>
</body>
</html>