<?php
require_once('./db/database_sql.php');
$thongbaodn = "";
$username = $password = $repassword = $email =  "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_POST['emaildn'];
    $password = md5($_POST['passdn']);
    $query = "SELECT * From nguoidung WHERE email='" . $_POST['emaildn'] . "' AND password='" . $password . "'";
    $list = [];
    $list = executeResult($query);
    if (count($list) == 1) {
        $token = md5($email . time());
        setcookie('token', $token, time() + 2*60*60, '/');
        $created_at = date("Y-m-d h:s:i");
        $query = "INSERT INTO tokens(user_email,token,created_at) VALUES ('" . $email . "','" . $token . "','" . $created_at . "')";
        execute($query);
        if ($list[0]['type_id'] == 1) {
            header("Location: ./admin/");
        } else {
            header('Location: indexx.php');
        }
    } else {
        $thongbaodn = "* Tài khoản đăng nhập không đúng! ";
    }
}
$user = authenToken();
if ($user != null) {
    header('Location: indexx.php');
    die();
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

    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/register_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="content">
        <div class="taikhoan">
            <div class="taikhoan_content">

                <h4 class="form-title">Đăng nhập</h4>

                <div class="taikhoan_form">
                    <p style="color: red;font-size:14px"><?= $thongbaodn ?></p>
                    <form action="" method="POST">

                        <div class="form-group">
                            <input type="email" class="form-control" name="emaildn" placeholder="Email" value="<?= $email ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passdn" placeholder="Password" minlength="6" required>
                        </div>
                        <a href="./quenmatkhau.php?type=0">Quên mật khẩu</a><br>
                        <a href="./register.php">Đăng ký tài khoản mới</a><br><br>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</body>

</html>