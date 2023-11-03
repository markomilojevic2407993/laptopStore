<?php   

require_once "baza.php";

if(!isset($_POST['email']) || empty($_POST['email'])){
    die ('Morate uneti email za bazu');
}
if(!isset($_POST['pass']) || empty($_POST['pass'])){
    die ('Morate uneti pass za bazu');
}
$email=$_POST['email'];
$pass=$_POST['pass'];


if($rezultat=$baza->query("INSERT INTO korisnici (email, pass) VALUES ('$email', '$pass')")){
    header('location: ../index.php');
}else{
    die('Registracija nije uspela');
}





?>