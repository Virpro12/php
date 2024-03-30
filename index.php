<?php
require "fc/fc.php";
require "db/db.php";
$hw = query("SELECT * FROM hw_count");
$todo = query("SELECT * FROM todo_count");
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
            <a href="" class="here">Home</a>
            <a href="hw.php" class="">Homework</a>
            <a href="" class="">To-Do-List</a>
        </nav>
    </nav>
    <header>
        <span class="material-symbols-outlined bi" id="op">
            menu
        </span>
        <h1>Home</h1>
        <div class="profile">
            <img src="asset/dds.png" alt="">
            <span class="material-symbols-outlined">
                arrow_drop_down
            </span>
        </div>
    </header>
    <main>
        <div class="l-wrapper">
            <div class="hw">
                <h2>Todo history</h2>
                <div class="todo-container">
                    <?php foreach ($hw as $h) : ?>
                        <div class="cst">
                            <h3>Count</h3>
                            <p><?= $t["number_hw"]?></p>
                        </div>
                        <div class="cst">
                            <h3>Done</h3>
                            <p><?= $t["done"]?></p>
                        </div>
                        <div class="cst">
                            <h3>Not Done</h3>
                            <p><?= $t["not_done"]?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="todo">
                <h2>Homework history</h2>
                <div class="hw-container">
                    <?php foreach ($todo as $t) : ?>
                        <div class="cst">
                            <h3>Count</h3>
                            <p><?= $t["number_todo"]?></p>
                        </div>
                        <div class="cst">
                            <h3>Done</h3>
                            <p><?= $t["done"]?></p>
                        </div>
                        <div class="cst">
                            <h3>Not Done</h3>
                            <p><?= $t["not_done"]?></p>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </main>
    <script src="fc/fc.js"></script>
</body>

</html>