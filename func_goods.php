<?php



function get_goods($product_id){
    global $pdo;
    $res = $pdo->query("SELECT * FROM goods WHERE id_product = $product_id");
    return $res->fetch();
}

