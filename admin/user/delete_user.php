<?php
require_once('../../db/database_sql.php');
if(isset($_POST['email'])){
    $query= "DELETE FROM tokens WHERE user_email='".$_POST['email']."'";
    execute($query);
    $query= "DELETE FROM nguoidung WHERE email='".$_POST['email']."'";
    execute($query);
    
}
