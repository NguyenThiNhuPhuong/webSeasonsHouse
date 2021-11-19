<?php
require_once('../../db/database_sql.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query= "DELETE FROM product WHERE id='".$_POST['id']."'";
    execute($query);
}