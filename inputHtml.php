<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input new laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/X.X.X/css/all.min.css">
</head>
<body>
    <div class="container">
        <form action="model/input.php" method="post">
            <input type="text" name="marka" placeholder="unesite marka" required><br>
            <input type="text" name="model" placeholder="unesite model" required><br>
            <input type="text" name="opis" placeholder="unesite opis" required><br>
            <input type="text" name="slika" placeholder="unesite slika" required><br>
            <input type="number" name="cena" placeholder="unesite cenu" required><br>
            <button class="btn btn-lg btn-success" type="submit">Input new article</button>
        </form>
    </div>
    
</body>
</html>