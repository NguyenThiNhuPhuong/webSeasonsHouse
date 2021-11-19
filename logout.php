<?php
require_once('./db/database_sql.php');
$token = $_COOKIE['token'];
if(empty($token)){
    header('Location: login.php');
    die();
}

$query="DELETE from tokens where token='$token'";
execute($query);
setcookie('token','', time() -7 * 24 * 60 * 60, '/');
header('Location: login.php');
die();
?>