<?php
require "db/db.php";
$hw = query("SELECT * FROM hw_count");
// var_dump($todo);
// var_dump($hw);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/dds.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Bloom</title>
</head>

<body>
    <nav class="s-nav-c">
        <span class="material-symbols-outlined" id="cl">
            close
        </span>
        <nav>
            <a href="../Bloom" class="">Home</a>
            <a href="" class="here">Homework</a>
            <a href="" class="">To-Do-List</a>
        </nav>
    </nav>
    <header>
        <span class="material-symbols-outlined bi" id="op">
            menu
        </span>
        <h1>Homework</h1>
        <div class="profile">
            <img src="asset/dds.png" alt="">
            <span class="material-symbols-outlined">
                arrow_drop_down
            </span>
        </div>
    </header>
    <main>
        <div class="hw">
            <?php foreach ($hw as $t) : ?>
                <h1><?= $t["number_todo"] ?></h1>
                <h1><?= $t["not_done"] ?></h1>
                <h1><?= $t["done"] ?></h1>
            <?php endforeach ?>
        </div>

    </main>
    <script src="fc/fc.js"></script>
</body>

</html>