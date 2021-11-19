<?php
require_once("../../db/database_sql.php");
$total = $address = $email = $phone_number = $fullname = $id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $d=[];
    $query = "SELECT * FROM orders WHERE id='$id'";
    $d = executeResult($query, true);
    $total = $d['total'];
    $address = $d['address'];
    $email = $d['email'];
    $phone_number = $d['phone_number'];
    $fullname = $d['fullname'];
    $order_date = $d['order_date'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "UPDATE orders SET fullname = '" . $_POST['fullname'] . "',phone_number='". $_POST['phone_number'] ."',email='" . $_POST['email'] . "',address='" . $_POST['address'] . "',total='" . $_POST['total'] . "',order_date='" . $order_date . "'WHERE  id='" . $id . "'";
    execute($query);
    header("Location: index.php ");
}

function authenToken()
{
    if (isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
        if (empty($token)) {
            return null;
        }
    } else {
        return null;
    }
    $query = "SELECT nguoidung.* from nguoidung,tokens where nguoidung.email=tokens.user_email and tokens.token='$token'";
    $list = executeResult($query);
    if ($list != null && count($list) > 0) {
        return $list[0];
    }

    return null;
}
$user = authenToken();
if ($user == null) {
    header('Location: ../../login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Cập nhật đơn hàng</title>
</head>

<body>

    <header>
        <div class="head_admin roww">
            <h3>Admin</h3>
            <a href="#" style="margin-right: 15px;"><?=$user['username']?></a>
            <a href="../../logout.php">Đăng xuất</a>
        </div>
    </header>
    <div id="menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <div id="close"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    <div class="content roww">
        <div class="content_thanhben">
            <ul>
                <li ><a href="../quanly/index.php"><i class="fa fa-folder" aria-hidden="true"></i> Quản lí danh mục</a></li>
                <li><a href="../product/index.php"><i class="fa fa-file-text" aria-hidden="true"></i> Quản lí sản phẩm</a></li>
                <li class="active"><a href="../donhang/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Quản lí đơn hàng</a></li>
                <li><a href="../user/index.php"><i class="fa fa-user" aria-hidden="true"></i> Quản lí người dùng</a></li>
                <li><a href="../../indexx.php"><i class="fa fa-university" aria-hidden="true"></i> Page</a></li>
            </ul>
        </div>
        <div class="content_hienthi">
            <div class="noidung">
            <form action="" method="POST" style="margin-top: 40px;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Họ và tên</label>
                <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" value="<?=$fullname?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput2" value="<?=$email?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Số điện thoại</label>
                <input type="tel" name="phone_number" class="form-control" id="exampleFormControlInput3" value="<?=$phone_number?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Địa chỉ giao hàng</label>
                <input type="text" name="address" class="form-control" id="exampleFormControlInput4"value="<?=$address?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput5">Tổng tiền thanh toán</label>
                <input type="text" name="total" class="form-control" id="exampleFormControlInput5" readonly value="<?= $total ?>">
            </div>
            <button class="btn btn-primary" type="submit">Cập nhật</button>
        </form>
               
            </div>
        </div>

    </div>
    <script>
        $("#menu").click(function() {
        $("#menu").hide("slow");
        $(".content_thanhben").show("slow");
        $("#close").show("slow");
    });
     $("#close").click(function() {

        $("#close").hide("slow");
        $(".content_thanhben").hide("slow");
        $("#menu").show("slow")
    }); 
    </script>
</body>

</html>