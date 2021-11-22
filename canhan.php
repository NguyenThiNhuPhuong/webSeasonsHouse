<?php
require_once("./db/database_sql.php");
require_once("./function/function.php");
$user = authenToken();
if ($user == null) {
    header('Location: login.php');
    die();
}
$sdt = $gt = "";
$username = $user['username'];
$email = $user['email'];
if (isset($user['sdt'])) {
    $sdt = $user['sdt'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/canhan.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Tài khoản của tôi</title>
</head>

<body>

    <div class="content">
        <h4 style="text-align: center;margin-top:30px;">THÔNG TIN TÀI KHOẢN</h4>
        <div class="row">
            <div class="canhan_phai">
                <div class="backgroup">
                    <img src="<?= $user['nen'] ?>" alt="backgroup" >
                </div>
                <div class="avatar"></div>

            </div>
            <div class="canhan_trai">
                <form method="POST" action="" style="margin-top:30px;width:60%;">
                    <div class="form-group">
                        <label for="nhap">Email</label>
                        <input type="email" id="nhap" class="form-control" name="email" placeholder="Email" value="<?= $email ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Name" value="<?= $username ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="tel" class="form-control" name="sdt" placeholder="số điện thoại" value="<?= $sdt ?>">
                    </div>

                    <div class="form-group">
                        <label>Giới tính</label><br>
                        <?php
                        if ($gt == "Nữ") {
                            echo '<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="gt" id="gt1" value="Nữ">
                        <label class="form-check-label" for="gt1">Nữ</label>
                         </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gt" id="gt2" value="Nam">
                        <label class="form-check-label" for="gt2">Nam</label>
                    </div>';
                        } else if ($gt == "Nam") {
                            echo '<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gt" id="gt1" value="Nữ">
                        <label class="form-check-label" for="gt1">Nữ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="gt" id="gt2" value="Nam">
                        <label class="form-check-label" for="gt2">Nam</label>
                    </div>';
                        } else {
                            echo '<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gt" id="gt1" value="Nữ">
                        <label class="form-check-label" for="gt1">Nữ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gt" id="gt2" value="Nam">
                        <label class="form-check-label" for="gt2">Nam</label>
                    </div>';
                        }
                        ?>

                    </div>
                    <button id="btnnhap" type="submit" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>