<?php  
//d	marka	model	opis	slika	
require_once 'baza.php';

if(!isset($_POST['marka']) || empty($_POST['marka'])){
    die ('Morate uneti marka za bazu');
}
if(!isset($_POST['model']) || empty($_POST['model'])){
    die ('Morate uneti model za bazu');
}
if(!isset($_POST['opis']) || empty($_POST['opis'])){
    die ('Morate uneti opis za bazu');
}
if(!isset($_POST['slika']) || empty($_POST['slika'])){
    die ('Morate uneti slika za bazu');
}
if(!isset($_POST['cena']) || empty($_POST['cena'])){
    die ('Morate uneti cena za bazu');
}

$marka=$_POST['marka'];
$model=$_POST['model'];
$opis=$_POST['opis'];
$slika=$_POST['slika'];
$cena=$_POST['cena'];

$rezultat=$baza->query("INSERT INTO laptop(marka,model,opis,slika, cena ) VALUES('$marka','$model','$opis','$slika', $cena)");
header('Location: ../index.php');

?>