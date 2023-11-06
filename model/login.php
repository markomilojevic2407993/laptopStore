<?php 
//id	marka	model	opis	slika
require_once "baza.php";


if(!isset($_POST['email']) || empty($_POST['email'])){
    die ('Morate uneti email za bazu');
}
if(!isset($_POST['pass']) || empty($_POST['pass'])){
    die ('Morate uneti pass za bazu');
}
$email=$_POST['email'];
$pass=$_POST['pass'];

$rezultat=$baza->query("SELECT * FROM korisnici WHERE email='$email' AND pass='$pass'");
if($rezultat->num_rows>0){
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    //var_dump($rezultat, $_POST);exit;
    $korisnik=$rezultat->fetch_assoc();
    $_SESSION['korisnik']=$korisnik;
    //$_SESSION['id']=$korisnik['idKorisnika'];

    header('Location: ../index.php');
}else{
    header('refresh:2; URL=../loginHtml.php');
    die('Neispravan email ili lozinka ');
    
}






?>