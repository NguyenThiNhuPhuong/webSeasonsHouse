<?php
require_once('./db/database_sql.php');
/* session_start();
$action=$id="";

if (isset($_POST['id']) && isset($_POST['action'])) {
    $action = $_POST['action'];
    $id = $_POST['id'];
    echo $id,$action;
    switch ($action) {
        case 'add':
            addsp($id);
            break;
        default:
            break;
    }
}

function addsp($id)
{
    $cart = [];
    if (!isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
    $isFind = false;
    for ($i = 0; $i < count($cart); $i++) {
        if ($cart[$i]['id'] == $id) {
            $cart[$i]['num']++;
            $isFind = true;
            break;
        }
        if (!$isFind) {
            $query = "SELECT * FROM product WHERE id='" . $id . "'";
            $product = executeResult($query, true);
            $product['num'] = 1;
            $cart[] = $product;
        }
        $_SESSION['cart'] = $cart;
    }
} */
if (!empty($_POST)) {
    $action = $_POST['action'];
    $id = $_POST['id'];
    $num = $_POST['num'];
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    switch ($action) {
        case 'add':
            $isFind = false;
            for ($i = 0; $i < count($cart); $i++) {

                if ($cart[$i]['id'] == $id) {
                    $cart[$i]['num'] += $num;
                    $isFind = true;
                }
            }
            if (!$isFind) {
                $cart[] = [
                    'id' => $id,
                    'num' => $num
                ];
            }
            setcookie('cart', json_encode($cart), time() + 30 * 24 * 60 * 60, '/');
            break;
        case 'delete':
            for ($i = 0; $i < count($cart); $i++) {

                if ($cart[$i]['id'] == $id) {
                   array_splice($cart,$i,1);
                   break;
                }
            }
            setcookie('cart', json_encode($cart), time() + 30 * 24 * 60 * 60, '/');
            break;
            case 'update':
                for ($i = 0; $i < count($cart); $i++) {

                    if ($cart[$i]['id'] == $id) {
                        $cart[$i]['num'] =$num;
                       break;
                    }
                }
                setcookie('cart', json_encode($cart), time() + 30 * 24 * 60 * 60, '/');
                break;
        default:
            break;
    }
}
