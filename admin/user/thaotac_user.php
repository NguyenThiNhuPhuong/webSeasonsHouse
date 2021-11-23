<?php
require_once("../../db/database_sql.php");
$thongbaodk = "";
$type_id = $username = $password = $repassword = $email = "";
$isUpdate = false;
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $isUpdate = true;
    $d = [];
    $query = "SELECT * FROM nguoidung WHERE email='$email'";
    $d = executeResult($query, true);
    $username = $d['username'];
    $type_id = $d['type_id'];
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $repassword = md5($_POST['repass']);
    $type_id = $_POST['type_id'];
    $updated_at    = $created_at = date("Y-m-d h:s:i");
    if ($isUpdate) {
        if ($password == $repassword) {
            $query = "UPDATE nguoidung SET username = '" . $_POST['username'] . "',updated_at='" . $updated_at . "',password='" . $password . "',type_id='" . $_POST['type_id'] . "'WHERE  email='" . $email . "'";
            execute($query);
            header("Location: ./index.php ");
        } else {
            $thongbaodk = "* xác nhận password không đúng! ";
        }
    } else {

        $query = " SELECT email from nguoidung";
        $list = executeResult($query);
        $isEmail = true;
        for ($i = 0; $i < count($list); $i++) {
            if ($email == $list[$i]['email']) {
                $thongbaodk = "* email này đã được đăng ký tài khoản! ";
                $isEmail = false;
                break;
            }
        }
        if ($isEmail) {
            if ($password == $repassword) {
                $query = "INSERT INTO nguoidung (username,password,type_id,email,nen,avatar,created_at,updated_at	) VALUES('" . $_POST['username'] . "','" . $password . "','" . $type_id . "','" . $_POST['email'] . "','" .$_POST['nen'] . "','". $_POST['avatar'] . "','" . $created_at . "','" . $updated_at . "')";
                execute($query);
                header("Location: ./index.php ");
            } else {
                $thongbaodk = "* xác nhận password không đúng! ";
            }
        }
    }
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
    <title>Thêm/cập nhật tài khoản</title>
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
                <p style="color: red;font-size:14px;margin-top:40px;"><?= $thongbaodk ?></p>
                <form method="POST" action="" style="margin-bottom:30px;">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="nhap" class="form-control" name="email" placeholder="Email" value="<?= $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Name" value="<?= $username ?>" required required>
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <select name="type_id" class="form-control" required>
                            <option value="">[chọn type]</option>
                            <?php
                            $ds = [];
                            require_once('../../db/database_sql.php');
                            $query = "SELECT * FROM type";
                            $ds = executeResult($query);

                            for ($i = 0; $i < count($ds); $i++) {
                                if ($type_id == $ds[$i]['id']) {
                                    echo " <option selected value='" . $ds[$i]['id'] . "'>" . $ds[$i]['name'] .  "</option>";
                                } else {
                                    echo " <option  value='" . $ds[$i]['id'] . "'>" . $ds[$i]['name'] .  "</option>";
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <label>Reconfirm password</label>
                        <input type="password" class="form-control" name="repass" placeholder="Reconfirm password" minlength="6" required>
                    </div>
                    <div class="form-group" style="display: none;">
                        <input type="text" class="form-control" name="nen"  value="https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg"  required>
                    </div>
                    <div class="form-group" style="display: none;">
                        <input type="text" class="form-control" name="avatar" value="https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg" required>
                    </div>
                    <button id="btnnhap" type="submit" class="btn btn-primary">Thêm</button>
                </form>

            </div>
        </div>

    </div>
</body>
<script>
    var isUpdate = '<?= $isUpdate ?>';
    if (isUpdate == '1') {
        $("#btnnhap").text("Cập nhật");
        $("#nhap").prop("readonly", true);
    }

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

</html>