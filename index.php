
<?php 

if(session_status()==PHP_SESSION_NONE){
    session_start();
}

//$_SESSION['email'];

$nav=[
    'Home'=>'index.php',
    'Shop'=>'shop.php,',
    'About'=>'about.php',
    //'Contact'=>'contact.php',
    'login'=>'loginHtml.php',
    'input'=>'inputHtml.php'
];
$navSocial = [
    'https://www.facebook.com/' => 'img/facebook.svg',
    'https://www.youtube.com/'=>'img/youtube.svg',
    'https://www.linkedin.com/'=>'img/linkedin.svg',
    'https://twitter.com/'=>'img/twitter.svg'
    
];

$year=date('Y');

require_once "model/baza.php";

$rezultat=$baza->query("SELECT * FROM laptop ");
$laptop=$rezultat->fetch_all(MYSQLI_ASSOC);
//var_dump($laptop); exit();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale of laptops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/X.X.X/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--gornjiNav-->
<div class="container bg-info text-center ">
    <div class="row text-white">
        <div class="col">
            <?php if(isset($_SESSION['email'])){
                echo '<p>Pozdrav: ' . $_SESSION['email'] . ' <a href="model/logout.php">Logout</a></p>';
            }?>
            
            <p>Besplatna dostava 067/099-909</p>
        </div>
        <div class="col">
            <p>Dve godine garancije na sve nase proizvode</p>
        </div>
    </div>
</div>
<!--navigacija-->
    <div class="container text-center bg-primary navigacija">
        <div class="row">
        
            <div class="col">
                <?php foreach($nav as $title => $link): ?>
                <a href="<?= $link?>" class="m-3 myNav"><?= $title ?></a>
                <?php endforeach; ?>
            </div>
            
            <div class="col ">
            <?php foreach($navSocial as $titleSocial => $icon): ?>
                <a href="<?= $titleSocial?>"><img src="<?= $icon ?>" class="m-2"></a>
                <?php endforeach; ?>
            </div>
      
        </div>
    </div>
    <!--Pretraga-->
    <div class="container pretraga">
        <div class="row">
        <div class="col-12" class="border border-info">
                <form action="" method="get"  >
                    <input type="text" name="search" class="text-center form-control-lg" placeholder="SEARCH">
                    <button type="submit" class="btn btn-lg btn-info"><img src="img/search.svg" ></button>
                </form>
            </div>

            </div>
        </div>
    </div>
    <!--Kartica sa paginacijom -->
    <div class="container kartica">
    <div class="row">
        <!-- Paginacija 1part -->
        <?php
        $perPage = 3; // Broj kartica po stranici
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $perPage;
        $laptopSubset = array_slice($laptop, $start, $perPage);
        ?>

        <?php foreach($laptopSubset as $lap): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= $lap['slika'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class= "card-title"><?= $lap['model'];?></h5>
                    <p class="card-text"><?= $lap['marka'];?></p>
                    <a href="vise.php?id=<?= $lap['id'];?>" class="btn btn-info">Vise o proizvodu-></a>
                    <h3><?= $lap['cena']?>:rsd</h3>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Paginacija 2part -->
    <ul class="pagination justify-content-center">
        <?php
        $totalPages = ceil(count($laptop) / $perPage);
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }
        ?>
    </ul>
</div>
    <!--footer-->
    <footer class="text-center">
        <p>copyrigh &copy; project <?= $year ?></p>
    </footer>
</body>
</html>