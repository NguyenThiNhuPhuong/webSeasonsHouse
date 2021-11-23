<?php
require_once("../../db/database_sql.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * from orders where id ='".$id."'";
    $donhang = executeResult($query, true);
    $query = "SELECT * from order_details where order_id ='".$id."'";
    $list = executeResult($query);
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
    <link rel="stylesheet" type="text/css" href="../print.css" media="print" />
    <link rel="icon" href="../../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Chi tiết đơn hàng</title>
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
                <li><a href="../quanly/index.php"><i class="fa fa-folder" aria-hidden="true"></i> Quản lí danh mục</a></li>
                <li><a href="../product/index.php"><i class="fa fa-file-text" aria-hidden="true"></i> Quản lí sản phẩm</a></li>
                <li class="active"><a href="../donhang/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Quản lí đơn hàng</a></li>
                <li><a href="../user/index.php"><i class="fa fa-user" aria-hidden="true"></i> Quản lí người dùng</a></li>
                <li><a href="../../indexx.php"><i class="fa fa-university" aria-hidden="true"></i> Page</a></li>
            </ul>
        </div>
        <div class="content_hienthi">
            <div class="noidung">
                <div class="chitiet">
                    <h4 class="text-center" style="margin-top: 30px;margin-bottom: 30px">Thông tin đơn hàng</h4>
                    <p>Mã đơn hàng: <?= $id?></p>
                    <p>Tên người nhận: <?= $donhang['fullname'] ?></p>
                    <p>Email: <?= $donhang['email'] ?></p>
                    <p>Số điện thoại: <?= $donhang['phone_number'] ?></p>
                    <p>Địa chỉ giao hàng: <?= $donhang['address'] ?></p>
                    <p>Thông tin sản phẩm:</p>
                    <table class="table table-bordered">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            for ($i = 0; $i < count($list); $i++) {
                                echo "<tr>
                                <th scope='row'>" . ($i + 1) . "</th>
                                <td>" . $list[$i]['product_id'] . "</td>
                                <td>" . $list[$i]['product_title'] . "</td>
                                <td>" . $list[$i]['num'] . "</td>
                                <td>" . number_format($list[$i]['price'], 0, '.', '.') . " VND</td>
                                 </tr>";
                                $total += $list[$i]['num'] * $list[$i]['price'];
                            }
                            ?>

                        </tbody>
                    </table>
                    <p>Tổng tiền: <?= number_format($total, 0, '.', '.') ?> VND</p>
                    <p>Ngày đặt hàng: <?= date("d/m/Y h:s:i", strtotime($donhang['order_date'])) ?></p>
                    <a id= "quaylai" href="./index.php">Quay lại</a>
                    <button id= "in_donhang" class="btn btn-sm btn-primary" onclick = "window.print ()">In đơn hàng</button>

                </div>

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