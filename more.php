<?php 

require_once "model/baza.php";


//var_dump($_GET);exit();
if(!isset($_GET['id'])){
    die('id nije izabran');
}
$id=$_GET['id'];

$rezultat=$baza->query("SELECT * FROM laptop WHERE id='$id'");
$lap=$rezultat->fetch_array(MYSQLI_ASSOC);

$nav=[
    'Home'=>'index.php',
    'Shop'=>'shop.php,',
    'About'=>'about.php',
    //'Contact'=>'contact.php',
    'login'=>'loginHtml.php'
];
$navSocial = [
    'https://www.facebook.com/' => 'img/facebook.svg',
    'https://www.youtube.com/'=>'img/youtube.svg',
    'https://www.linkedin.com/'=>'img/linkedin.svg',
    'https://twitter.com/'=>'img/twitter.svg'
    
];


if(session_status()==PHP_SESSION_NONE){
    session_start();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vise o proizvodu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/X.X.X/css/all.min.css">
</head>
<body>
<div class="container text-center bg-primary navigacija">
        <div class="row">
        
            <div class="col">
                <?php if(isset($_SESSION['email'])):?>
                    <p>pozdrav:<?=$_SESSION['email'];?></p>
                    <a class="btn btn-danger" href="model/logout.php">Logout</a>
                <?php endif;?>
                
                <a href=""></a>
                <?php foreach($nav as $title => $link): ?>
                <a class="text-white text-decoration-none fs-4 m-2" href="<?= $link?>" class="m-3 myNav"><?= $title ?></a>
                <?php endforeach; ?>
            </div>
            
            <div class="col ">
            <?php foreach($navSocial as $titleSocial => $icon): ?>
                <a class="text-white text-decoration-none fs-4 m-2" href="<?= $titleSocial?>"><img src="<?= $icon ?>" class="m-2"></a>
                <?php endforeach; ?>
            </div>
      
        </div>
    </div>
    <div class="container">
            <div class="card" style="width: 18rem;">
            <img src="<?= $lap['slika'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $lap['model'];?></h5>
                <p class="card-text"><?= $lap['marka'];?></p>
                <p class="card-text"><?= $lap['opis'];?></p>
                <h1><?= $lap['cena']?>:RSD</h1>

                <?php if(isset($_SESSION['email']) && $_SESSION['email'] == true):  ?>
                    
                    <a href="" class="btn btn-success">Buy</a>
                <?php else: ?>
                    <a href="loginHtml.php" class="btn btn-info"> Login </a>
                <?php endif; ?>
            </div>
      </div>
</body>
</html>