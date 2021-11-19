<?php
require_once('./db/database_sql.php');
$thongbaodk = "";
$username = $password = $repassword = $email =  "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['namedk'];
    $email = $_POST['emaildk'];
    $password = md5($_POST['passdk']);
    $repassword = md5($_POST['repassdk']);
    $type_id = 2;
    $updated_at    = $created_at = date("Y-m-d h:s:i");

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
            $query = "INSERT INTO nguoidung (username,password,type_id,email,created_at,updated_at	) VALUES('" . $_POST['namedk'] . "','" . $password . "','" . $type_id . "','" . $_POST['emaildk'] . "','" . $created_at . "','" . $updated_at . "')";
            echo $query;
            execute($query);
            header("Location: login.php");
        } else {
            $thongbaodk = "* xác nhận password không đúng! ";
        }
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
    /* if (empty($token)) {
        return null;
    } */
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/register_login.css">
    <title>Đăng ký tài khoản</title>
</head>

<body>
    <div class="content">
        <div class="taikhoan">
            <div class="taikhoan_content">
            <h4 class="form-title">Đăng ký tài khoản</h4>

            <div class="taikhoan_form">
                <p style="color: red;font-size:14px"><?= $thongbaodk ?></p>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="namedk" placeholder="Name" value="<?= $username ?>" required required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="emaildk" placeholder="Email" value="<?= $email ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="passdk" placeholder="Password" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repassdk" placeholder="Reconfirm password" minlength="6" required>
                    </div>
                    <a href="./login.php">Tôi đã có tài khoản</a><br><br>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </form>


            </div>
            </div>

        </div>
    </div>
</body>

</html>