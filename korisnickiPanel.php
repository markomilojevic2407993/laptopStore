<?php   

    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }

    $korpa = [];
    require_once   'model/baza.php';
    if(isset($_SESSION['korisnik']['idKorisnik'])){
        $idKorisnik=$_SESSION['korisnik']['idKorisnik'];
        $rezultat=$baza->query("SELECT * FROM korpa WHERE idKorisnik='$idKorisnik'");
        if ($rezultat->num_rows > 0) {
            $korpa = $rezultat->fetch_all(MYSQLI_ASSOC);
        }
    }

    var_dump($korpa);
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $_SESSION['korisnik']['email']?></h1>

    <?php foreach($korpa as $kupovine):?>
    <p><?= $kupovine['idProizvod'] ?></p>
    <p><?= $kupovine['id'] ?></p>
    <p><?= $kupovine['racun'] ?></p>
    <?php endforeach;?>
    
</body>
</html>