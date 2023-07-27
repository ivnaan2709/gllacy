<?php
 error_reporting(-1);

global $pdo;

?>


<div class="basket-modal">

    <?php if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])): ?>
        <div class="basket-modal-content">
            <div class="basket-products-list">
                <?php $sum=0;
                foreach ($_SESSION['basket'] as $product_id => $quantity) :
                    $res = $pdo->query("SELECT * FROM goods WHERE id_product=$product_id");
                    $product=$res->fetch(); ?>

                    <div class="basket-product-item">
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product_id) ?>">
                            <button name="delete_to_card" class="basket-product-delete" title="Close" >Close</button>
                        </form>
                        <img src="<?= htmlspecialchars($product['image']) ?>">
                        <p class="basket-product-name"><?= htmlspecialchars($product['name']) ?></p>
                        <p class="basket-product-weight"><?= htmlspecialchars($quantity) ?> кг x <b><?= htmlspecialchars($product['price']) ?> грн.</b></p>
                        <p class="basket-product-price"><?= $quantity*$product['price']; ?> грн.</p>
                    </div>

                <?php $sum+=$quantity*$product['price'];
                endforeach; ?>
            </div>
            <p class="basket-sum">Итого: <b><?= $sum ?> грн.</b></p>
            <a class="btn"> Оформить заказ</a>
        </div>
    <?php endif; ?>

</div>