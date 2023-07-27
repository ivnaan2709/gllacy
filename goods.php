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

if(isset($_GET['do']) && $_GET['do'] == 'exit'){
    if(!empty($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    header("Location: index.php");
    die();
}

if(isset($_POST['add_to_cart']) && isset($_POST['product_id'])){
    addToCart($_POST['product_id'],$_POST['quantity-goods']);
}

if(isset($_POST['delete_to_card']) && isset($_POST['product_id'])){
    deleteToCart($_POST['product_id']);
}

displayCart();
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
        <?php require_once __DIR__ . '/widget/header.php'; ?>

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
                    <img src="<?= htmlspecialchars($goods['image']);?>">
                    <div class="product-description">
                        <p><b>Название:</b> <?= htmlspecialchars($goods['name']);?></p>
                        <p><b>Цена:</b> <?= htmlspecialchars($goods['price']);?> грн./кг</p>
                        <p><b>Жирность:</b> <?= htmlspecialchars($goods['fat_content']);?> %</p>
                        <p><b>Наполнители:</b> <?= htmlspecialchars($goods['fillers']);?></p>
                        <p><b>Описнаие:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <form method="post">
                            <input type="text" name="product_id" value="<?= htmlspecialchars($goods['id_product']);?>">
                            <input type="number" name="quantity-goods" class="quantity-goods" value="1" min="1" max="10" step="0.1">
                            <input type="submit" class="btn" name="add_to_cart" value="Купить">
                        </form>


                    </div>
            </div>

        </main>

        <?php require_once __DIR__ . '/widget/footer.php'; ?>
    </div>

    <?php require_once __DIR__ . '/widget/modal.php'; ?>
    <script src="js/script.js"></script>

</body>
</html>
