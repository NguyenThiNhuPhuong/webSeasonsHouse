<?php
require_once("./db/database_sql.php");
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
$username = "";
if ($user == null) {
	$status_user = false;
} else {
	$username = $user['username'];
	$status_user = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Seasons House</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>
	<div class="super_container">
		<!-- Header -->
		<header class="header">
			<!-- Top Bar -->
			<div class="top_bar" style="background-color: #832fb4;">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="phone">+84 963466159</div>
							<div class="social">
								<ul class="social_list">
									<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="user_box ml-auto">
								<div class="user_box_login user_box_link" id="dangky"><a href="./login.php">Đăng Nhập</a></div>
								<div class="user_box_register user_box_link" id="dangnhap"><a href="./register.php">Đăng Ký</a></div>
								<div class="user_box_register user_box_link" id="user"><a href="./canhan.php"><?= $username ?></a></div>
								<div class="user_box_logout user_box_link" id="dangxuat"><a href="./logout.php">Đăng xuất</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav" style="background: rgba(141, 79, 255, 0.10); height: 100px;">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Seasons House</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a class="header_active" href="indexx.php">Trang Chủ</a></li>
									<li class="main_nav_item"><a href="offers.php">MENU</a></li>
									<li class="main_nav_item"><a href="contact.php">Kết Nối</a></li>
								</ul>
							</div>
							<div class="content_search ml-lg-0 ml-auto">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
											</g>
										</g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z" />
											</g>
										</g>
									</g>
								</svg>
							</div>

							<form id="search_form" class="search_form bez_1">
								<input type="search" class="search_content_input bez_1">
							</form>

							<div class="hamburger">
								<i class="fa fa-bars trans_200"></i>
							</div>
							<div class="car" style="display: flex;">
								<a href="giohang.php">
									<img style="width: 30px; height: 30px; justify-content: right;margin-left: 20px; margin-top: 10px;" src="https://cdn-icons-png.flaticon.com/512/726/726496.png" alt="cart">
								</a>
								<a href="giohang.php">
									<?php
									$cart = [];
									if (isset($_COOKIE['cart'])) {
										$json = $_COOKIE['cart'];
										$cart = json_decode($json, true);
									}

									$count = 0;
									for ($i = 0; $i < count($cart); $i++) {
										$count += $cart[$i]['num'];
									}
									?>
									<div style="color: rgb(255, 255, 255); font-weight: 700; margin-left: 2px; margin-bottom: 10px;font-size: 20px;border-radius: 50%; margin-bottom: 30px; background-color: brown; width: 18px;height: 18px; text-align: center;font-size: small;">
										<?= $count ?>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="indexx.php">Trang Chủ</a></li>
					<li class="menu_item"><a href="offers.php">MENU</a></li>
					<li class="menu_item"><a href="contact.php">Kết Nối</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<!-- Image by https://unsplash.com/@anikindimitry -->
						<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg); opacity: 0.6;"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h6>.</h6>
								<h1>Seasons House</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">Xem Thêm<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/home_slider_1.png);opacity: 0.6;"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h6>.</h6>
								<h1>Nước Uống Seasons House</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">Xem Thêm<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/home_slider.jpg);opacity: 0.6;"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h6>.</h6>
								<h1>Tráng Miệng Seasons House</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">Xem Thêm<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Nav - Prev -->
				<div class="home_slider_nav home_slider_prev">
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_prev'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
					</svg>
				</div>

				<!-- Home Slider Nav - Next -->
				<div class="home_slider_nav home_slider_next">
					<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_next'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
					</svg>
				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
						<li class="home_slider_custom_dot active">
							<div></div>01.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>02.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>03.
						</li>
					</ul>
				</div>

			</div>

		</div>


		<!-- Search -->
		<div class="search">
			<!-- Search Contents -->
			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->
						<div class="search_tabs_container">
							<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_tab  d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="window.open('offers.php?id=18','_self')"><span>Ẩm Thực</span></a></div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="window.open('offers.php?id=21','_self')">Nước Uống</a></div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="window.open('offers.php?id=19','_self')">Ăn Vặt</a></div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="window.open('offers.php?id=20','_self')">Tráng Miệng</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->
		<div class="intro">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="intro_title text-center">Chào mừng bạn đến Seasons House</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="intro_text text-center">
							<p>Rất cảm ơn bạn đã đến với chúng tôi, bạn không cần phải lo lắng làm sao để kiếm một món ăn ngon,
								nước uống thật tuyệt vời, nhanh chóng, tiện lợi vì đã có Seasons House đang chờ được phục vụ bạn !
							</p>
						</div>
					</div>
				</div>
				<div class="row intro_items">
					<?php
					$query = "SELECT * FROM product where id_quanly=19 limit 0,3";
					$list = executeResult($query);

					for ($i = 0; $i < count($list); $i++) {
						echo '
							<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<div class="intro_item_background" style="background-image:url(\'' . $list[$i]['thumbnail'] . '\')"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">Ăn vặt</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="offers.php?id=19">Xem thêm<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>' . $list[$i]['title'] . '</h1>
									<div class="intro_price">' . number_format($list[$i]["price"], 0, '.', '.') . ' VNĐ</div>
									
								</div>
							</div>
						</div>
					</div>';
					}
					?>

				</div>
			</div>
		</div>

		<!-- CTA -->
		<div class="cta">
			<!-- Image by https://unsplash.com/@thanni -->
			<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- CTA Slider -->
						<div class="cta_slider_container">
							<div class="owl-carousel owl-theme cta_slider">

								<?php
								$query = "SELECT * FROM product where id_quanly=18 limit 0,3";
								$list = executeResult($query);
								for ($i = 0; $i < count($list); $i++) {
									echo '<div class="owl-item cta_item text-center">
									<div class="cta_title">' . $list[$i]['title'] . '</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">' . $list[$i]['content'] . '</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="offers.php?id=18">xem thêm<span></span><span></span><span></span></a>
									</div>
								</div>';
								}
								?>

							</div>

							<!-- CTA Slider Nav - Prev -->
							<div class="cta_slider_nav cta_slider_prev">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- CTA Slider Nav - Next -->
							<div class="cta_slider_nav cta_slider_next">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>

		<!-- Offers -->

		<div class="offers">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Dành cho bạn</h2>
					</div>
				</div>
				<div class="row offers_items">

					<!-- Offers Item -->
					<?php
					$query = "SELECT * FROM product limit 0,6";
					$list = executeResult($query);
					for ($i = 0; $i < count($list); $i++) {
						echo '<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div  id= "tam" class="col-lg-6" style="width: 280px; height: 350px;">
									<div class="offers_image_container">
										<div class="offers_image_background" style="background-image:url(' . $list[$i]["thumbnail"] . ');"></div>
										<div class="offer_name"><a href="#">' . $list[$i]["title"] . '</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">' . number_format($list[$i]["price"], 0, '.', '.') . '<span>VNĐ</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">' . $list[$i]["content"] . '</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.php?id=' . $list[$i]["id_quanly"] . '">Xem Thêm</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>';
					}
					?>
				</div>
			</div>
		</div>

		<!-- Testimonials -->
		<div class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Khách hàng nói gì về chúng tôi</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
										<div class="test_icon"><img src="images/backpack.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Quang Linh</div>
													<div class="test_date">14/01/2021</div>
												</div>
												<div class="test_quote_title">" Trên cả tuyệt vời "</div>
												<p class="test_quote_text">Nhờ có Seasons House mà tôi có thể khám phá ra những món ăn ngon nhất.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
										<div class="test_icon"><img src="images/island_t.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Như Phượng</div>
													<div class="test_date">22/03/2021</div>
												</div>
												<div class="test_quote_title">" Tôi Yêu Seasons House "</div>
												<p class="test_quote_text">Nhờ Seasons House mà tôi có thể tận hưởng những món ăn một cách tuyệt vời.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
										<div class="test_icon"><img src="images/kayak.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Bích Phượng</div>
													<div class="test_date">16/07/2021</div>
												</div>
												<div class="test_quote_title">" Món ăn thanh xuân"</div>
												<p class="test_quote_text">Tôi cảm ơn Seasons House rất nhiều vì đã cho tôi sự lựa chọn tuyệt vời đến vậy.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_4.jpg" alt=""></div>
										<div class="test_icon"><img src="images/island_t.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Yang Linh</div>
													<div class="test_date">18/03/2021</div>
												</div>
												<div class="test_quote_title">" Mơ Seasons House "</div>
												<p class="test_quote_text">Seasons House mang lại cho tôi niềm cảm hứng cuộc sống.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_5.jpg" alt=""></div>
										<div class="test_icon"><img src="images/backpack.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Phượng Nguyễn</div>
													<div class="test_date">16/04/2021</div>
												</div>
												<div class="test_quote_title">" Món ăn đáng mong đợi "</div>
												<p class="test_quote_text">Món ăn đã giúp tôi trở nên thoải mái hơn sau khi qua trở lại bắt đầu công việc.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item" style="width: 350px;height: 520px">
										<div class="test_image"><img src="images/test_6.jpg" alt=""></div>
										<div class="test_icon"><img src="images/kayak.png" alt=""></div>
										<div class="test_content_container" style="width: 350px;height: 145px">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">Phượng Võ</div>
													<div class="test_date">16/08/2021</div>
												</div>
												<div class="test_quote_title">" Món ăn trong mơ "</div>
												<p class="test_quote_text">Tôi rất vui vì mình đã biết đến Seasons House, mang lại cho tôi niềm hứng khởi.</p>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Testimonials Slider Nav - Prev -->
							<div class="test_slider_nav test_slider_prev">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- Testimonials Slider Nav - Next -->
							<div class="test_slider_nav test_slider_next">
								<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="trending">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Món Ngon Thịnh Hành</h2>
					</div>
				</div>
				<div class="row trending_container">
					<?php
					$query = "SELECT * FROM product limit 0,8";
					$list = executeResult($query);
					for ($i = 0; $i < count($list); $i++) {
						$query = "SELECT * FROM quanly where id=' " . $list[$i]['id_quanly'] . "'";
						$listql = executeResult($query, true);
						echo '<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img style="width: 80px; height: 90px;" src="' . $list[$i]["thumbnail"] . '" alt="https://unsplash.com/@fransaraco"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">' . $list[$i]["title"] . '</a></div>
								<div class="trending_price">' . number_format($list[$i]["price"], 0, '.', '.') . ' VNĐ</div>
								<div class="trending_location">' . $listql['name'] . '</div>
							</div>
						</div>
					</div>';
					}
					?>
				</div>
			</div>
		</div>

		<div class="contact">
			<div class="contact_background" style="background-image:url(images/contact.png)"></div>

			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact_image">

						</div>
					</div>
					<div class="col-lg-7">
						<div class="contact_form_container">
							<div class="contact_title">Kết nối với chúng tôi</div>
							<form action="https://formspree.io/f/mrgrwkgb" method="POST" id="contact_form" class="contact_form">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Họ Và Tên" name="ten" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" name="email" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_subject" class="contact_form_subject input_field" name="tilte" placeholder="Tiêu đề" required="required" data-error="Subject is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Nội Dung" required="required" data-error="Please, write us a message."></textarea>
								<button type="submit" id="form_submit_button" class="form_submit_button button">Gửi Tin Nhắn<span></span><span></span><span></span></button>
							</form>
						</div>
					</div>
				</div>
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
									<li class="footer_nav_item"><a href="indexx.php">Trang Chủ</a></li>
									<li class="footer_nav_item"><a href="offers.php">MENU</a></li>
									<li class="footer_nav_item"><a href="contact.php">Kết Nối</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script>
		var status_user = '<?= $status_user ?>';
		if (status_user == '1') {
			document.querySelector("#dangky").style.display = "none";
			document.querySelector("#dangnhap").style.display = "none";
		} else {
			document.querySelector("#dangxuat").style.display = "none";
			document.querySelector("#user").style.display = "none";
		}
	</script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>