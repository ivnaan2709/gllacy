<?php
error_reporting(-1);
session_start();

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/func_users.php';


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Gllacy Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/style-900.css">-->
<!--    <link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/style.css">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <input type="radio" id="btn-1" name="toggle" checked>
    <input type="radio" id="btn-2" name="toggle">
    <input type="radio" id="btn-3" name="toggle">

    <div class="site-wrapper">
        <div class="content-wrapper">

            <?php require_once __DIR__ . '/header.php';

            ?>

            <main class="container">

                <div class="slider">

                    <div class="slide" id="slide1">
                        <div class="slide-title">
                            Крем-брюле и пломбир с малиновым джемом
                        </div>
                        <a class="slide-btn" href="#">Давайте оба!</a>
                    </div>

                    <div class="slide" id="slide2">
                        <div class="slide-title">
                            Шоколадный пломбир и лимонный сорбет
                        </div>
                        <a class="slide-btn" href="#">Давайте оба!</a>
                    </div>

                    <div class="slide" id="slide3">
                        <div class="slide-title">
                            Пломбир с помадкой и клубничный щербет
                        </div>
                        <a class="slide-btn" href="#">Давайте оба!</a>
                    </div>

                    <div class="slider-controls">
                        <label for="btn-1"></label>
                        <label for="btn-2"></label>
                        <label for="btn-3"></label>
                    </div>

                </div>

                <section class="index-content">

                    <div class="index-content-left">
                        <div class="index-content-raspberry">
                            <div class="index-content-text">
                                <h2 class="index-content-title">Малинка даром!</h2>
                                <p>При покупке 2 кг любого фруктового мороженого, добавим в ваш заказ банку малинового варенья бесплатно</p>
                                <a class="btn" href="#">Хочу варенье!</a>
                            </div>
                        </div>

                    </div>

                    <div class="index-content-right">
                        <div class="index-content-chocolate">
                            <div class="index-content-text">
                                <h2 class="index-content-title">Шоколадки даром!</h2>
                                <p>При покупке 2 кг пломбира, добавим в ваш заказ упаковку вкуснейшей шоколадной присыпке совершено бесплатно</p>
                                <a class="btn" href="#">Хочу шоколадки!</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bestsellers">
                    <div class="bestsellers-item">
                        <img src="img/ice-cream-1.png" alt="" width="267" height="267">
                        <h2 class="price-product">310 грн/кг</h2>
                        <p>Сливочное с апельсиновым джемом и цитрусовой стружкой</p>
                    </div>
                    <div class="bestsellers-item">
                        <img src="img/ice-cream-2.png" alt="" width="267" height="267">
                        <h2 class="price-product">380 грн/кг</h2>
                        <p>Сливочно-кофейное с кусочками шоколада</p>
                    </div>
                    <div class="bestsellers-item">
                        <img src="img/ice-cream-3.png" alt="" width="267" height="267">
                        <h2 class="price-product">355 грн/кг</h2>
                        <p>Сливочно-клубничное с присыпкой из белого шоколада</p>
                    </div>
                    <div class="bestsellers-item">
                        <img src="img/ice-cream-4.png" alt="" width="267" height="267">
                        <h2 class="price-product">415 грн/кг</h2>
                        <p>Сливочное крем-брюле с карамельной подливкой</p>
                    </div>
                </section>

                <section class="info-block">
                    <h2 class="info-title">Магазин Глейси - это онлайн и офлайн магазин по продаже мороженого собственного производства на развес</h2>

                    <div class="info-items">
                        <div class="info-left">
                            <p>Все наше мороженое изготавливается на собственном производстве, с использованием современного оборудования и проверенных временем технологий.</p>

                            <p>Для приготовления мороженого используются настоящие сливки и молоко высочайшего качества. Все дополнительные ингредиенты и добавки произведены из натурального, экологически чистого сырья.</p>
                        </div>
                        <div class="info-right">
                            <p>Закупка ингредиентов производится только у проверенных фермерских хозяйств и компаний, с которыми нас связывает долговременное сотрудничество.</p>

                            <p>Доставка нашего мороженого до заказчиков осуществляется в специальном термопаке, который не дает мороженому растаять в пути и позволяет сохранить превосходный вкус.</p>
                        </div>
                    </div>
                </section>

                <section class="index-content">
                    <div class="index-content-left">
                        <div class="index-content-strawberry">
                            <div class="index-content-news">
                                <p>Новое в нашем блоге</p>
                                <h2 class="index-content-title">10 способов сервировки фруктовых щербетов к столу</h2>
                            </div>
                        </div>
<!--                        <a class="btn" href="#"></a>-->
                    </div>
                    <div class="index-content-right">
                        <div class="index-content-letter">
                            <div class="index-content-letter-text">
                                <p>Подпишитесь на нашу сладкую рассылку и будете всегда в курсе всего самого вкусного, что у нас происходит. Обещаем не спамить и не слать всякой ненужной ерунды. Честно =)</p>
                                <form class="letter-form">
                                    <input type="text" name="email" placeholder="Электронная почта" value=''>
                                    <button class="btn" type="submit">Отправить</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>

            </main>

            <section class="map-block">
                <div class="map">
                    <img src="img/index-map.jpg">
                </div>
                <div class="feedback-block">
                    <p>Адрес главного офиса и офлайн магазин:<br>
                        <span>ул. Большая Конюшенная 19/8, Санкт-Петербург</span></p>
                    <p>Для заказов по телефону:<br>
                        <span>+380 666 666 666</span><br>
                        (с 10 до 20 ежедневно) </p>
                    <a class="btn" href="#">Форма обратной связи</a>
                </div>
            </section>

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

            <div class="feedback-modal">
                <button class="feedback-modal-close" type="button" title="Close">Close</button>
                <span>Мы обязательно вам ответим!</span>
                <form class="feedback-form" method="post">
                    <label for="name">Как вас зовут?</label>
                    <input type="text" name="name" id="name" placeholder="Как вас зовут?">
                    <label for="email">Ваша почта для ответа?</label>
                    <input type="text" name="email" id="email" placeholder="Ваша почта для ответа?">
                    <label for="message">Напишите что-нибудь...</label>
                    <textarea name="message" id="message" cols="num" rows="num" placeholder="Напишите что-нибудь..."></textarea>
                    <button class="btn">Отправить</button>
                </form>
            </div>

            <div class="modal-overlay"></div>

        </div>
    </div>

    <?php require_once __DIR__ . '/modal.php'; ?>

    <script src="js/script.js"></script>

</body>
</html>