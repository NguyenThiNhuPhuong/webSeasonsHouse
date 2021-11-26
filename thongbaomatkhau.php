<?php
require_once("./db/database_sql.php");
$email=$_POST['email'];
$mk = mt_rand(111111, 999999);
$to_email = $email;
$subject = 'Lấy lại mật khẩu';
$message = 'Mật khẩu mới của bạn là: ' . $mk;
$headers = 'From: webhappyday@gmail.com';
$updated_at = date("Y-m-d h:s:i");
$query = "UPDATE  nguoidung set password='" . md5($mk) . "',updated_at='" . $updated_at . "' where email='" . $email . "'";
execute($query);
mail($to_email, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quên mật khẩu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Season House Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/canhan.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="head_quemmatkhau">
        <a href="./indexx.php" style="font-size: 30px;margin-right:25px;"><img src="./images/logo.png" alt="logo"> Seasonshouse</a>
        <a style="flex-grow: 1;font-size: 25px;">Đặt lại mật khẩu</a>
        <a href="" style="float: right;color:red;">Cần trợ giúp?</a>
    </div>
    <div class="content_quemmatkhau">
        <div  class="khungquenmatkhau">

            <a href="./quenmatkhau.php" id="muiten">&#8592</a>
            <h4 style="text-align: center;color:black;">Đặt Lại Mật Khẩu</h4>
            <p style="text-align: center;color:black;">Mã xác minh đã được gửi đến địa chỉ email </p>
            <p style="text-align: center;color:red;"><?= $email ?>.</p>
            <p style="text-align: center;color:black;"> Vui lòng xác minh </p>
            <button id="mk_btn" onclick="window.open('./logout.php','_sefl')">OK</button>
        </div>

    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">Seasons House</a></div>
                            </div>
                            <p class="footer_about_text">Rất cảm ơn bạn đã đến với chúng tôi, bạn không cần phải lo lắng làm sao để kiếm một món ngon, một thức uống giải khát vì đã có Seasons House.</p>
                            <ul class="footer_social_list">
                                <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">Bài Review</div>
                        <div class="footer_content footer_blog">

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="blog.html">Món ăn tuyệt vời nhất</a></div>
                                    <div class="footer_blog_date">08/09/2021</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="blog.html">Sự mới lạ trong tôi</a></div>
                                    <div class="footer_blog_date">06/07/2021</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="blog.html">Tráng miệng của năm</a></div>
                                    <div class="footer_blog_date">18/10/2021</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">Links</div>
                        <div class="footer_content footer_tags">
                            <ul class="tags_list clearfix">
                                <li class="tag_item"><a href="#">Ẩm Thực</a></li>
                                <li class="tag_item"><a href="#">Tráng Miệng</a></li>
                                <li class="tag_item"><a href="#">Ăn Vặt</a></li>
                                <li class="tag_item"><a href="#">Nước Uống</a></li>
                                <li class="tag_item"><a href="#">Bánh Kem</a></li>
                                <li class="tag_item"><a href="#">Món Hàn Quốc</a></li>
                                <li class="tag_item"><a href="#">Giải khát</a></li>
                                <li class="tag_item"><a href="#">Seasons House</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">Liên hệ</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <a class="d-flex" href="https://www.google.com/maps/place/3+V%C4%A9nh+Ph%C3%BA+42,+V%C4%A9nh+Ph%C3%BA,+Thu%E1%BA%ADn+An,+B%C3%ACnh+D%C6%B0%C6%A1ng/@10.8862328,106.6958438,17z/data=!3m1!4b1!4m5!3m4!1s0x3174d7dd3c6dc465:0x290e2f524a6dafb0!8m2!3d10.8862328!4d106.6980325">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">3/2 Vĩnh Phú 42, Phường Lái Thiêu, TP.Thuận An, Tỉnh Bình Dương</div>
                                    </a>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <a class="d-flex" href="callto:0963466159">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">0963466159</div>
                                    </a>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">seasonhouse@gmail.com</a></div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text"><a href="https://colorlib.com">www.seasonhouse.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2  ">
                    <div class="copyright_content d-flex flex-row align-items-center">
                        <div>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Nhóm 11 &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Tất cả đều được tạo ra từ <i class="fa fa-heart-o" aria-hidden="true"></i><a href="" target="_blank">Quang Linh, Như Phượng, Bích Phượng</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item"><a href="#">Trang Chủ</a></li>
                                <li class="footer_nav_item"><a href="offers.html">MENU</a></li>
                                <li class="footer_nav_item"><a href="contact.html">Kết Nối</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>