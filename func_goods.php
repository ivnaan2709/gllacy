<?php


function addToCart($product_id,$quantity) {
    if (!isset($_SESSION['basket'])) {
        $_SESSION['basket'] = array();
    }

    if (isset($_SESSION['basket'][$product_id])) {
        $_SESSION['basket'][$product_id]+=$quantity;
    } else {
        $_SESSION['basket'][$product_id]=$quantity;
    }
}

function deleteToCart($product_id) {
    if (isset($_SESSION['basket'][$product_id])) {
        // Видаляємо товар з корзини
        unset($_SESSION['basket'][$product_id]);
    }
}

function displayCart() {
    if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])) {
        echo '<h2>Зміст корзини:</h2>';
        foreach ($_SESSION['basket'] as $product_id => $quantity) {
            // Виводимо назву товару та кількість
            echo '<p>Товар з ID ' . $product_id . ', кількість: ' . $quantity . '</p>';
            echo '<form method="post">';
            echo '<input type="text" name="product_id" value="'.$product_id.'">';
            echo '<button class="btn" name="delete_to_card">Delete</button>';
            echo '</form>';
        }
    } else {
        echo '<p>Корзина порожня</p>';
    }
}

function get_goods($product_id){
    global $pdo;
    $res = $pdo->query("SELECT * FROM goods WHERE id_product = $product_id");
    return $res->fetch();
}

