<?php
require_once("../../db/database_sql.php");
$title = $id = $thumbnail = $id_quanly = $content = $price = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['title'])) {
    $title = $_GET['title'];
    $d = [];
    $query = "SELECT * FROM product WHERE id='$id'";
    $d = executeResult($query);

    for ($i = 0; $i < count($d); $i++) {
        $thumbnail = $d[$i]['thumbnail'];
        $id_quanly = $d[$i]['id_quanly'];
        $content = $d[$i]['content'];
        $price = $d[$i]['price'];
    }
}

if (isset($_POST['title'])) {
    $updated_at = $created_at = date("Y-m-d h:s:i");
    if ($id != "") {
        $query = "UPDATE product SET title = '" . $_POST['title'] . "',updated_at='" . $updated_at . "',price='" . $_POST['price'] . "',thumbnail='" . $_POST['thumbnail'] . "',content='" . $_POST['content'] . "',id_quanly='" . $_POST['id_quanly'] . "'WHERE  id='" . $id . "'";
    } else {
        $query = "INSERT INTO product (title,id_quanly,content,thumbnail,price,created_at,updated_at) VALUES('" . $_POST['title'] .  "','" . $_POST['id_quanly'] . "','" . $_POST['content'] . "','" . $_POST['thumbnail'] . "','" . $_POST['price'] . "','" . $created_at . "','" . $updated_at . "')";
    }
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
    <title>Thêm/cập nhật sản phẩm</title>
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
                <li class="active"><a href="../product/index.php"><i class="fa fa-file-text" aria-hidden="true"></i> Quản lí sản phẩm</a></li>
                <li><a href="../donhang/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Quản lí đơn hàng</a></li>
                <li><a href="../user/index.php"><i class="fa fa-user" aria-hidden="true"></i> Quản lí người dùng</a></li>
                <li><a href="../../indexx.php"><i class="fa fa-university" aria-hidden="true"></i> Page</a></li>
            </ul>
        </div>
        <div class="content_hienthi">
            <div class="noidung">
                <form method="POST" action="" style="margin-top: 40px;margin-bottom:30px;">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="nhap" class="form-control" name="title" value="<?= $title ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="<?= $price ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Id_quanly</label>

                        <select name="id_quanly" class="form-control" required>
                            <option value="">[chọn danh mục]</option>
                            <?php
                            $ds = [];
                            require_once('../../db/database_sql.php');
                            $query = "SELECT * FROM quanly";
                            $ds = executeResult($query);

                            for ($i = 0; $i < count($ds); $i++) {
                                if ($id_quanly == $ds[$i]['id']) {
                                    echo " <option selected value='" . $ds[$i]['id'] . "'>" . $ds[$i]['name'] .  "</option>";
                                } else {
                                    echo " <option  value='" . $ds[$i]['id'] . "'>" . $ds[$i]['name'] .  "</option>";
                                }
                            }
                            ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="text" class="form-control" name="thumbnail" id="img" value="<?= $thumbnail ?>" required>
                        <img src="<?= $thumbnail ?>" alt="anh" id="img_cn" style="width: 200px;margin-top:10px;">
                    </div>
                    <div class="form-group">

                        <label>Content</label>
                        <textarea id="content" class="form-control" rows="5" name="content" style="resize:none" value="<?= $content ?>" required></textarea>
                    </div>
                    <button id="btnnhap" type="submit" class="btn btn-primary">Cập nhật</button>
                </form>

            </div>
        </div>

    </div>
</body>
<script>
    if ($("#nhap").val() == "") {
        $("#btnnhap").text("Thêm");
    }
    $("#img").change(function() {
        var s = $(this).val();
        $("#img_cn").attr("src", s);
    })
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