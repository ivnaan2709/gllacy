<?php
error_reporting(-1);
session_start();

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/func_catalog.php';
require_once __DIR__ . '/func_users.php';


$goods = get_produts();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <!--  <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/style-900.css">-->
    <!--  <link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/style.css">-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>
<body>


    <div class="content-wrapper">

        <?php require_once __DIR__ . '/header.php';  ?>

        <main class="container">

            <div class="inner-page-title">
              <ul class="breadcrumbs">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Каталог</a></li>
                <li>Сливочное</li>
              </ul>
              <h1>Сливочное мороженое</h1>
            </div>


            <div class="filter-products">
              <form method="get">
                <fieldset class="filter-sorting">
                  <legend>Сортировка:</legend>
                  <div class="select">
                    <select class="select-sorting" disabled>
                      <option selected>по популярности</option>
                      <option>по цене</option>
                      <option>по новизне</option>
                    </select>
                  </div>
                </fieldset>

                <fieldset class="filter-price">
                  <legend>Цена: <span id="amount" class="price-filter"></span></legend>
                  <div class="price-range">
                    <div id="slider" >
                        <input type="text" id="amount" class="price-filter" readonly>
                        <span id="amount" class="price-filter"></span>
                        <div id="slider"></div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="filter-fat">
                  <legend>Жирность:</legend>
                  <ul class="ul-fat">
                    <li>
                      <label>
                        <input type="radio" name="fat-content">
                        <span class="radio-indicator"></span>
                        0%
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="fat-content">
                        <span class="radio-indicator"></span>
                        до 10%
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="fat-content">
                        <span class="radio-indicator"></span>
                        до 30%
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="fat-content">
                        <span class="radio-indicator"></span>
                        выше 30%
                      </label>
                    </li>
                  </ul>
                </fieldset>

                <fieldset class="filter-fillers">
                  <legend>Наполнители:</legend>
                  <ul class="ul-fillers">
                    <li>
                      <label>
                        <input type="checkbox" name="fillers" checked>
                        <span class="checkbox-indicator"></span>
                        шоколадные
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" name="fillers">
                        <span class="checkbox-indicator"></span>
                        сахарные присыпки
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" name="fillers">
                        <span class="checkbox-indicator"></span>
                        фрукты
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" name="fillers" >
                        <span class="checkbox-indicator"></span>
                        сиропы
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" name="fillers">
                        <span class="checkbox-indicator"></span>
                        джемы
                      </label>
                    </li>
                  </ul>
                </fieldset>
                <button class="btn-filter">Применить</button>
              </form>
            </div>

            <div class="product-items">

                <?php foreach ($goods as $product): ?>
                  <div class="product-item">
                    <div class="product-item-bg"></div>
                    <div class="product-item-info">
                      <img src="<?= htmlspecialchars($product['image']); ?>">
                      <p class="item-price"><?= htmlspecialchars($product['price']); ?> ₴/кг</p>
                      <p class="item-name"><?= htmlspecialchars($product['name']); ?></p>
                    </div>
                    <a class="btn" href="goods.php?product_id=<?= htmlspecialchars($product['id_product']); ?>">Быстрый просмотр</a>
                  </div>
                <?php endforeach; ?>
            </div>

      </main>


        <?php require_once __DIR__ . '/footer.php'; ?>

    </div>

    <?php require_once __DIR__ . '/modal.php'; ?>
    <script src="js/script.js"></script>


</body>
</html>