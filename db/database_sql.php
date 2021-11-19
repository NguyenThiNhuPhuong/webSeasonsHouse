<?php
//tao chuoi ket noi
$connect = new mysqli("localhost", "root", "", "gianhang");
mysqli_set_charset($connect, "utf8");
//kiem tra ket noi
if ($connect->connect_error) {
    var_dump($connect->connect_error);
    die();
}

// dung cho insert, update, delete (tao chuoi truy van ben ngoai roi truyen vao)
function execute($query)
{
    $connect = new mysqli("localhost", "root", "", "gianhang");
    mysqli_set_charset($connect, "utf8");
    mysqli_query($connect, $query);
    $connect->close();
}

// tra ve ket qua cho select, select *(tao chuoi truy van ben ngoai roi truyen vao)
function executeResult($query, $isSingle = false)
{
    $connect = new mysqli("localhost", "root", "", "gianhang");
    mysqli_set_charset($connect, "utf8");
    $result = mysqli_query($connect, $query);
    $list = [];
    if ($isSingle) {
        $list = mysqli_fetch_array($result, 1);
    } else {
        while ($row = mysqli_fetch_array($result, 1)) {
            $list[] = $row;
        }
    }

    $connect->close();
    return  $list;
}
