<?php

error_reporting(-1);
session_start();

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/func_users.php';
require_once __DIR__ . '/func_goods.php';

if (isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];
}

$goods=get_goods($product_id);

var_dump($goods);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>goods</title>
</head>
<body>

    <div class="content-wrapper">
        <?php require_once __DIR__ . '/header.php'; ?>

        <main class="container">
            <div class="inner-page-title">
                <ul class="breadcrumbs">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="catalog.php">Каталог</a></li>
                    <li>Сливочное</li>
                    <li>Сливочное с апельсиновым джемом и цитрусовой стружкой</li>
                </ul>
            </div>

            <div class="goods-item">
                <form method="post" >
                    <img src="img/product-img/1.png">
                    <div class="product-description">
                        <p><b>Название:</b> Сливочное с апельсиновым джемом и цитрусовой стружкой</p>
                        <p><b>Цена:</b> 310 грн./кг</p>
                        <p><b>Жирность:</b> 10</p>
                        <p><b>Наполнители:</b> джемы, сахарные присыпки</p>
                        <p><b>Описнаие:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <input type="number" id="tentacles" name="tentacles" min="1" max="10" step="0.1">
                        <a class="btn">Купить</a>
                    </div>
                </form>
            </div>

        </main>

        <?php require_once __DIR__ . '/footer.php'; ?>
    </div>

    <?php require_once __DIR__ . '/modal.php'; ?>
    <script src="js/script.js"></script>

</body>
</html>
