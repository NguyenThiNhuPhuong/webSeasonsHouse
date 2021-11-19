<?php
require_once('../../db/database_sql.php');
if(isset($_POST['id'])){
    $query= "SELECT * FROM product WHERE id_quanly='".$_POST['id']."'";
    $list = executeResult($query);
    if(count($list) > 0) {
		echo 'Danh mục đang chứa sản phẩm, không thể xoá!!!';
		die();
	}
    $query= "DELETE FROM quanly WHERE id='".$_POST['id']."'";
    execute($query);
    echo 'Xóa danh mục thành công!!!';
}
