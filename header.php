<header class="main-header">
    <div class="main-header-layout container">

        <nav class="main-navigation">
            <div class="header-logo">
                <img src="img/navi-logo.png" width="154" height="64" alt="GllacyShop">
            </div>
            <ul class="nav-list">
                <li class="nav-list-child "><a href="catalog.php" class="nav-a">Каталог</a>
                    <ul class="catalog-list">
                        <li><a href="#">Новинки</a></li>
                        <li><a href="#">Сливочное</a></li>
                        <li><a href="#">Щербеты</a></li>
                        <li><a href="#">Фруктовый лед</a></li>
                        <li><a href="#">Мелорин</a></li>
                    </ul>
                </li>
                <li  class="nav-list-child "><a href="#" class="nav-a">Доставка и оплата</a></li>
                <li  class="nav-list-child"><a href="#" class="nav-a">О Компании</a></li>
            </ul>
        </nav>

        <div class="users-elements">
            <div class="search-block user-element">
                <a class="search" href="#">Поиск</a>

                <div class="search-modal">
                    <form class="search-form">
                        <label class="search-label">Поиск</label>
                        <input type="text" name="search" class="search-input" placeholder="Что ищем?">
                    </form>
                </div>
            </div>



            <div class="user-block user-element">
                <?php if(empty($_SESSION['user']['email'])): ?>
                    <a class="login">Вход</a>
                <?php else: ?>
                    <a class="greeting">Привет, <?= htmlspecialchars($_SESSION['user']['nickname']) ?></a>
                <?php endif; ?>

                <div class="login-modal">
                    <form class="login-form" method="post">
                        <input type="text" name="email" placeholder="Электронная почта">
                        <input type="password" name="password" placeholder="Пароль">
                        <div class="auth-group">
                            <button class="btn" type="submit" name="authorization">Войти</button>
                            <div>
                                <a class="restore">Забыли пароль?</a>
                                <a class="registration">Новая регистрация</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="personal-office">
                    <ul>
                        <li><a>Личный кабинет</a></li>
                        <li><a>Покупки</a></li>
                        <li><a href="?do=exit">Выход</a></li>
                    </ul>
                </div>
            </div>

            <div class="basket-block user-element">
                <a class="basket">Корзина</a>

                <div class="basket-modal">
                    <div class="basket-modal-content">
                        <div class="basket-products-list">
                            <div class="basket-product-item">
                                <button class="basket-product-delete" type="button" title="Close">Close</button>
                                <img src="img/product-img/1.png">
                                <p class="basket-product-name">Пломбир с апельсиновым джемом</p>
                                <p class="basket-product-weight">1,5 кг x <b>200 грн.</b></p>
                                <p class="basket-product-price">300 грн.</p>
                            </div>

                            <div class="basket-product-item">
                                <button class="basket-product-delete" type="button" title="Close">Close</button>
                                <img src="img/product-img/3.png">
                                <p class="basket-product-name">Клубничный пломбир с присыпкой из белого шоколада</p>
                                <p class="basket-product-weight">1,5 кг x <b>300 грн.</b></p>
                                <p class="basket-product-price">450 грн.</p>
                            </div>
                        </div>
                        <p class="basket-sum">Итого: <b>750 грн.</b></p>
                        <a class="btn"> Оформить заказ</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</header>