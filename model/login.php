<?php 
//id	marka	model	opis	slika
//require_once "model/baza.php";


if(!isset($_POST['email']) || empty($_POST['email'])){
    die ('Morate uneti email za bazu');
}
if(!isset($_POST['pass']) || empty($_POST['pass'])){
    die ('Morate uneti pass za bazu');
}
$email=$_POST['email'];
$pass=$_POST['pass'];



if(session_status()==PHP_SESSION_NONE){
    session_start();
}

$_SESSION['email']=$email;

header('Location: ../index.php');

?>