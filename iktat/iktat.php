<?php
require "classes/db.php";
session_start();

// Megnézem, hogy bejelentkezett-e
// ha nem, akkor visszaküldöm az index.php-ra
if (isset($_SESSION["user"])){
    $user = ucfirst($_SESSION["user"]);
}else{
    header("location: index.php");
}

// Kapcsolódás az adatbázishoz
$db = new Dbconnect();
$db->Connection("iktat");

// A $tomb feltöltése userekkel
$users = $db->selectUpload();

// Adatok beírása az adatbázisba
if (isset($_POST["iktat"])){
    $dat = $_POST["datum"];
    $uid = $_POST["cimzett"];
    $targy = $_POST["targy"];
    $comment = $_POST["comment"];

    $db->iktat($dat, $uid, $targy, $comment);
}

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iktatás</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/iktat.css">
</head>
<body>
<div class="container-fluid text-center">
    <!-- Menü -->
    <div class="jumbotron">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <!-- A regisztrálás menüpont csak akkor jelenik meg, ha a bejelentkezett felhasználó admin -->
        <?php
            if ($_SESSION["admin"] == "1"){
                echo '<li class="nav-item active"><a class="nav-link" href="regiszt.php">Regisztrálás</a></li>';
            }
        ?>

      <li class="nav-item">
        <a class="nav-link disabled" href="iktat.php">Iktatás</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista.php">Kimutatások</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Kilépés</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!-- Adatform -->
<form action="#" method="POST">
    <!-- Dátum -->
    <div class="form-group">
        <label for="datum">Dátum</label>
        <input type="date" name="datum" class="form-control" id="datum" required>
    </div>
  
    <!-- Címzett feltöltés php-ból-->
    <label for="cimzett">Címzett kijelölése</label>
    <select class="form-control" name="cimzett" id="cimzett">
        <?php 
            foreach ($users as $key){
                echo "<option value=$key[ID_user]>$key[nev]</option>";
            }
        ?>
    </select>

    <!-- Tárgy -->
    <div class="form-group">
        <label for="targy">Tárgy</label>
        <input type="text" name="targy" class="form-control" id="targy" required placeholder="Adja meg a levél tárgyát!">
    </div>

    <!-- Leírás -->
    <div class="form-group">
        <label for="comment">Leírás</label>
        <textarea rows="5" name="comment" class="form-control" id="comment"></textarea>
    </div>
    <!-- OK gomb -->
    <button type="submit" name="iktat" id="iktat" class="button button-success">Iktat</button>
</form>
</div>    
</body>
</html>