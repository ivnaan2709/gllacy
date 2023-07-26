<?php
error_reporting(-1);
session_start();

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/func_users.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Личный кабинет</title>
</head>
<body>

    <?php require_once __DIR__ . '/header.php'; ?>

    <main class="">
        <h1>Hello, user!</h1>

        <form class="personal-date" method="post">
            <label>Nickname: <input type="text" name="nickname">
            </label>
            <label>Email: <input type="text" name="email">
            </label>
            <span>delivery details</span>
            <label>City: <input type="text" name="email">
            </label>
        </form>
    </main>


    <footer class="main-footer">
        <div class="footer-social">
            <a class="social-btn social-btn-tw" href="#">Twitter</a>
            <a class="social-btn social-btn-inst" href="#">Instagram</a>
            <a class="social-btn social-btn-fb" href="#">Facebook</a>
            <a class="social-btn social-btn-vk" href="#">Vk</a>
        </div>
        <div class="footer-info">
            <ul>
                <li><a class="suppliers" href="#" >Для поставщиков</a></li>
                <li><a href="#">О производстве</a></li>
                <li><a href="#">Наши документы</a></li>
                <li><a href="#">Экологические стандарты</a></li>
            </ul>
        </div>
        <div class="footer-copyright">
            Сделано в <span>HTML Academy</span> © 2017
        </div>
    </footer>

</body>
</html>
