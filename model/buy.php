<?php   

if(session_status()==PHP_SESSION_NONE){
    session_start();
}

if(!isset($_POST['kolicina']) || empty($_POST['kolicina'])){
    die('Nije uneta zeljena kolcina');
}
if(!isset($_POST['idProizvod']) || empty($_POST['idProizvod'])){
    die('Nije uneta zeljena idProizvod');
}

require_once "baza.php";




$kolicina=$_POST['kolicina'];
$idProizvod=$_POST['idProizvod'];
$idKorisnik=$_SESSION['email'];
$rezultat=$baza->query("SELECT cena FROM laptop WHERE id='$idProizvod'");
$cena=$rezultat->fetch_assoc();
$racun=$cena['cena']*$kolicina;


$baza->query("INSERT INTO korpa(idProizvod,idKorisnik,racun) VALUES ('$idProizvod', '$idKorisnik', '$racun')");

header('Location: ../index.php');

?>