<?php
class Dbconnect{

    // Belső változók
    protected $host;
    protected $user;
    protected $pwd;
    protected $con; // kapcsolati string

    function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pwd = "";
    }

    function Connection($dbname){
        try {
            $this->con = new PDO("mysql:host=$this->host; dbname=$dbname", $this->user, $this->pwd);
            $this->con->exec("set names 'utf8'");
        } catch (PDOExeption $e) {
            die("<h1>Adatbázis kapcsolódási hiba!</h1>");
        }
    }

    function LoginCheck($user, $pwd){
        $tomb = null;   // Eredmény

        $res = $this->con->prepare("SELECT `nev`, `jelszo`, `admin` FROM `users` WHERE nev = ? AND jelszo = ?");
        $res->bindparam(1, $user);
        $res->bindparam(2, $pwd);
        $res->execute();

        // Az eredmény halmazt kimentjük a tömbbe
        while ($row = $res->fetch()) {
            $tomb[] = $row;
        }

        return $tomb;

    }

    function selectUpload(){
        $tomb = null;

        $res = $this->con->prepare("SELECT nev, ID_user FROM users");
        $res->execute();

        // Az eredmény halmazt kimentjük a tömbbe
        while ($row = $res->fetch()) {
            $tomb[] = $row;
        }

        return $tomb;
    }

    function iktat($datum, $userid, $targy, $comment){
        $res = $this->con->prepare("INSERT INTO `letters`(`erkezett`, `ID_user`, `targy`, `leiras`) VALUES (:erkezett, :ID_user, :targy, :leiras)");

        $res->bindparam('erkezett', $datum);
        $res->bindparam('ID_user', $userid);
        $res->bindparam('targy', $targy);
        $res->bindparam('leiras', $comment);

        $res->execute();
    }

    function lista($uid, $dattol, $datig){
        $tomb = null;
        $res = $this->con->prepare("SELECT * FROM letters WHERE (erkezett BETWEEN :datumtol AND :datumig) AND ID_user = :ID_user");

        $res->bindparam('ID_user', $uid);
        $res->bindparam('datumtol', $dattol);
        $res->bindparam('datumig', $datig);

        $res->execute();

        // Az eredmény halmazt kimentjük a tömbbe
        while ($row = $res->fetch()) {
            $tomb[] = $row;
        }

        return $tomb;
    }
}
?>