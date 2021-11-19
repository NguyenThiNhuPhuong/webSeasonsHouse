<?php
require_once('../db/database_sql.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../fontend/fontend.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <title>Trang chủ</title>
</head>

<body>
  <?php
  include_once('../layout/header.php');

  ?>

  <div class="row" style="width: 80%;margin-left:10%;">
    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = "SELECT * FROM product WHERE id_quanly='$id'";
      $list = executeResult($query);
      for ($i = 0; $i < count($list); $i++) {
        echo '<div style="width: 22%;height:380px;margin-left:3%;margin-top:30px;border: #ffd551 1px solid;">
        <a href="./chitiet.php?id=' . $list[$i]["id"] . '">
        <img class="card-img-top" style="height:220px;" src="' . $list[$i]['thumbnail'] . '" alt="Card image cap">
        </a>
      <div class="card-body">
        <h5 class="card-title">' . $list[$i]['title'] . '</h5>
        <p class="card-text">' . number_format($list[$i]['price'], 0, '.', '.') . ' VND</p>
   
        <button class="btn btn-primary" onclick="addgh(' . $list[$i]["id"] . ')">Thêm vào giỏ hàng</button>
      </div>
    </div>';
      }
    }
    ?>
    <script>
      function addgh(id) {
        $.post('thaotacsp.php', {
          'id': id,
          'action': 'add',
          'num': 1
        }, function(data) {
          location.reload();
        });

      }
    </script>
  </div>