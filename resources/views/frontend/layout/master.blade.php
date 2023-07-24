<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	<base href="{{ asset("")."frontend/" }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custome.css">



</head>

<body>
	<!--header -->
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html"><img src="images/logo.png" alt=""
										style="width: 300px;height: 50px;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class=""><a href="/">Trang chủ</a></li>
								<li class="has-dropdown">
									<a href="/product/shop">Phòng</a>
									<ul class="dropdown">
										<li><a href="/cart">Giỏ hàng</a></li>
										<li><a href="/checkout">Thanh toán</a></li>

									</ul>
								</li>
								<li><a href="/about">Giới thiệu</a></li>
								<li><a href="/contact">Liên hệ</a></li>
								<li><a href="/cart"><i class="icon-shopping-cart"></i> Giỏ hàng [0]</a></li>
                                <li><a href="{{route('admin.register')}}">Đăng Ký</a></li>/
                                <li><a href="{{route('admin.login')}}">Đăng Nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/bannerks1.jpeg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Những thiết kế sang trọng</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với chúng tôi</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bannerks2.jpeg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Những thiết kế sang trọng</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với chúng tôi</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bannerks3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Những thiết kế sang trọng</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với chúng tôi</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
<!-- End header -->

@yield('content')


		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email"
												placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
	<!-- footer -->
<footer id="colorlib-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
					<h4>Giới thiệu</h4>
					<p>QUangVLOG&N là mội khách sạn có những phòng đẹp, sang trọng luôn mang tới sự hài lòng cho khách
						hàng về dịch vụ của chúng tôi. Chúc bạn có một trải nghiệm thật thú vị ở tại QuangVLOG&N...
					</p>
					<p>
					<ul class="colorlib-social-icons">

						<li><a href="https://www.facebook.com/vietpro.edu/"><i class="icon-facebook"></i></a></li>

						<li><a href="https://www.youtube.com/channel/UCLjRjXUSy3g9iKRWTyw75Nw"><i
									class="icon-youtube"></i></a></li>
					</ul>
					</p>
				</div>
				<div class="col-md-3 colorlib-widget">
					<h4>Chăm sóc khách hàng</h4>
					<p>
					<ul class="colorlib-footer-links">
						<li><a href="#">Liên hệ </a></li>
						<li><a href="#">Mã giảm giá</a></li>
						<li><a href="#">Phòng ưa chuộng</a></li>
						<li><a href="#">Đặc biệt</a></li>


					</ul>
					</p>
				</div>
				<div class="col-md-2 colorlib-widget">
					<h4>Thông tin</h4>
					<p>
					<ul class="colorlib-footer-links">
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Thông tin vận hành</a></li>
						<li><a href="#">Chính sách bảo mật</a></li>
						<li><a href="#">Hỗ trợ</a></li>

					</ul>
					</p>
				</div>
				<div class="col-md-4">
					<h4>Thông tin liên hệ</h4>
					<ul class="colorlib-footer-links">
						<li>Số nhà 5 ngõ 17 Mỹ Đình - Hà Nội</li>
						<li><a href="tel://1234567920">0988 550 553</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<!-- <li><a href="#">http://vietpro.edu.vn</a></li> -->
					</ul>
				</div>
			</div>
		</div>

	</footer>
	<!--end  footer -->
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>
