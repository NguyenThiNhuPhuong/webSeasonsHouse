<?php
require_once('../../db/database_sql.php');
if(isset($_POST['id'])){
    $query= "SELECT * FROM order_details WHERE order_id='".$_POST['id']."'";
    $list = executeResult($query);
    if(count($list) > 0) {
		echo 'Đơn hàng chưa được xử lý, không thể xoá!!!';
		die();
	}
    $query= "DELETE FROM orders WHERE id='".$_POST['id']."'";
    execute($query);
    echo 'Xóa đơn hàng thành công!!!';
}