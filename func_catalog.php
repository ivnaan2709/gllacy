<?php
error_reporting(-1);

function get_produts(){
    global $pdo;
    $res = $pdo->query("SELECT * FROM goods");
    return $res->fetchAll();
}
