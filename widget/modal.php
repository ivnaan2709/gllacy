<div class="registration-modal">
    <div class="registration-modal-content">
        <button type="submit" class="registration-modal-close">Close</button>
        <span>Регистрация</span>
        <form class="registration-form" method="post">

            <?php if(!empty($_SESSION['success'])): ?>
                <div class="registration-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if(!empty($_SESSION['errors'])): ?>
                <div class="registration-error">
                    <?php
                    echo $_SESSION['errors'];
                    unset($_SESSION['errors']);
                    ?>
                </div>
            <?php endif; ?>

            <div class="input-box">
                <input type="text" id="email-registration" required name="email">
                <label for="email">Введите ваш еmail</label>
            </div>

            <div class="input-box">
                <input type="text" id="nickname" required name="nickname">
                <label for="email-registration">Введите ваше имя</label>
            </div>

            <div class="input-box">
                <input type="password" id="password" required name="password">
                <label for="password">Пароль</label>
            </div>
            <button type="submit" name="registration" class="btn">Зарегистрироваться</button>
        </form>
    </div>
</div>



