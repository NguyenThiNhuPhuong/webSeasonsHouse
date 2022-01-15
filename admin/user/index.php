<?php
require_once('../../db/database_sql.php');
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
$ds = [];
$query = "SELECT * FROM nguoidung";
$ds = executeResult($query);
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
    <title>Người dùng</title>
</head>

<body>

    <header>
        <div class="head_admin roww">
            <h3>Admin</h3>
            <a href="#" style="margin-right: 15px;"><?= $user['username'] ?></a>
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
                <li><a href="../donhang/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Quản lí đơn hàng</a></li>
                <li class="active"><a href="../user/index.php"><i class="fa fa-user" aria-hidden="true"></i> Quản lí người dùng</a></li>
                <li><a href="../../indexx.php"><i class="fa fa-university" aria-hidden="true"></i> Page</a></li>
            </ul>
        </div>
        <div class="content_hienthi">
            <div class="noidung">
                <h3 class="text-center" style="margin-top: 30px;margin-bottom: 30px">Danh sách tài khoản đã đăng ký</h3>
                <button class="btn btn-primary" style="margin: 15px 0px;" onclick="window.open('thaotac_user.php')">Thêm tài khoản</button>
                <p>Tất cả: <?= count($ds) ?> tài khoản</p>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Ngày đăng ký</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        for ($i = 0; $i < count($ds); $i++) {
                            $query = "SELECT * FROM type where id='" . $ds[$i]['type_id'] . "'";
                            $user = executeResult($query, true);
                            echo "<tr>
                                <th scope='row'>" . ($i + 1) . "</th>
                                <td>" . $ds[$i]['username'] . "</td>
                                <td>" . $ds[$i]['email'] . "</td>
                                <td>" . $user['name'] . "</td>
                                <td>" . $ds[$i]['created_at'] . "</td>
                                <td><button class='btn btn-warning' onclick=\"window.open('thaotac_user.php?email=" . $ds[$i]['email'] . "')\">Sửa</button></td>
                                <td><button class='btn btn-danger dlt' data-email='" . $ds[$i]['email'] . "'>Xóa</button></td>
                         </tr>";
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <script>
        $(".dlt_user").click(function() {
            var email = $(this).data('email');
            $option = confirm("Bạn chắc chắn muốn xóa tài khoản " + email + " này không?")
            if ($option == false) {
                return;
            }
            $.post("delete_user.php", {
                'email': email,
                'delete': 'delete'
            }, function(data) {
                alert("Xóa tài khoản thành công!")
                location.reload();
            });

        });
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