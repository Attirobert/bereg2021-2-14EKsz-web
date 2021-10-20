<?php
    function fakt($a){
        if ($a == 1) return $a;
        else {
            print $a."<br>";
            return $a * fakt($a - 1);
        } 
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktoriális számítás rekurzióval</title>
    <meta name="Author" content='Kovács Attila'>
</head>
<body>
    <?php
        $b = 10;
        print ("$b = ".fakt($b));
    ?>
</body>
</html>