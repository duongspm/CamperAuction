@extends('client.about')
@section('addabout')
<!-- ==============================================
    TEAM
    =============================================== -->
<!-- // CSS FILES // -->
    	<link rel="stylesheet" href="{{ asset('front-end-2/style.css')}}">
	<!-- Bootstrap -->
	{{-- <link rel="stylesheet" href="{{asset('front-end-2/assets/bootstrap-4.1.3-dist/css/bootstrap.min.css')}}"> --}}
	<!-- Core Navigation -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/js/corenav-master/corenav-master/dist/coreNavigation-1.1.3.min.css')}}">
	<!-- Navbar Style -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/css/navbar-style.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/css/owl.carousel.min.css')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/css/animate.css')}}">
	<!-- Line Icons -->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<!-- LightBox -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/js/lightbox/dist/css/lightbox.min.css')}}">
	<!-- Style -->
	<link rel="stylesheet" href="{{asset('front-end-2/assets/css/style.css')}}">
	<section id="team">
		<div class="container">
			<h2>chúng tôi là</h2>
			<div class="row">
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="team-member">
						<div class="team-img">
							<img src="{{ asset('front-end-2/img/team/avatar-face-04.png') }}" width="100%" height="100%" class="img-fluid" alt="team-1">
						</div>
						<div class="team-caption">
							<h4>Dennis</h4>
							<p>CEO Founder</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="team-member">
						<div class="team-img">
							<img src="{{ asset('front-end-2/img/team/avatar-face-05.png') }}" alt="" width="100%" height="100%" class="img-fluid" alt="team-2">
						</div>
						<div class="team-caption">
							<h4>Duong Tran</h4>
							<p>Designer</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="team-member">
						<div class="team-img">
							<img src="{{ asset('front-end-2/img/team/avatar-face-02.png') }}" width="100%" height="100%" class="img-fluid" alt="team-3">
						</div>
						<div class="team-caption">
							<h4>Maria Doe</h4>
							<p>Developer</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="feature-box">
						<span class="lnr lnr-rocket"></span>
						<h4>THIẾT KẾ SÁNG TẠO</h4>
						<p>Chúng tôi làm việc một cách có hệ thống để lồng ghép trách nhiệm của công ty vào cốt lõi của chúng tôi.</p>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="feature-box">
						<span class="lnr lnr-laptop-phone"></span>
						<h4>Sản phẩm đa dạng</h4>
						<p>Chúng tôi làm việc một cách có hệ thống để lồng ghép trách nhiệm của công ty vào cốt lõi của chúng tôi.</p>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="feature-box">
						<span class="lnr lnr-bubble"></span>
						<h4>24/7 Hổ trợ</h4>
						<p>Chúng tôi làm việc một cách có hệ thống để lồng ghép trách nhiệm của công ty vào cốt lõi của chúng tôi.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==============================================
    ABOUT US
    =============================================== -->

	<section id="about">
		<div class="container">
			<h2>Đánh giá</h2>
			<div class="row">
				<div class="col-lg-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="about-img">
						<img  src="{{ asset('front-end-2/img/60583140685a41616392512.png') }}"  width="500px" height="426px" class="img-fluid" alt="about">
					</div>
				</div>
				<div class="col-lg-6 about-content wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<p>Một thực tế đã có từ lâu rằng người đọc sẽ bị phân tâm bởi nội dung có thể đọc được của một trang khi nhìn vào bố cục của nó.</p>
					<p>Tính toán đáng tin cậy về sức mạnh tổng hợp hàng đầu chứ không phải là sự cộng tác và chia sẻ ý tưởng hút tài nguyên.</p>
					<div class="skills">
						<span class="skill">Thiết kế</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 50%;">
								<span>50%</span>
							</div>
						</div>
						<span class="skill">Phát triển</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 90%;">
								<span>90%</span>
							</div>
						</div>
						<span class="skill">Xây dựng thương hiệu</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 50%;">
								<span>50%</span>
							</div>
						</div>
						<span class="skill">Hình ảnh</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 80%;">
								<span>80%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==============================================
    PORTFOLIO
    =============================================== -->

	
	<section id="services">
		<div class="container">
			<h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-smartphone"></span>
						</div>
						<div class="service-content">
							<h5>Ứng dụng di động</h5>
							<p>Trong tương lai chúng tôi sẽ xây dựng ứng dụng đấu giá, các bạn có thể tải ứng dụng và đấu giá sản phẩm ngay trên đó.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-store"></span>
						</div>
						<div class="service-content">
							<h5>Thương mại điện tử</h5>
							<p>Chúng tôi sẽ phát triển hệ thống, thêm một nhánh thương mại điện tử cho phép các bạn có thể mua sản phẩm tại đây.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-chart-bars"></span>
						</div>
						<div class="service-content">
							<h5>Digital Marketing</h5>
							<p>Một thực tế đã có từ lâu rằng người đọc sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
						</div>
					</div>
				</div>
				<p style="padding-top:200px"></p>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-laptop-phone"></span>
						</div>
						<div class="service-content">
							<h5>Web Design</h5>
							<p>Website được xây dựng bằng Laravel nên còn nhiều trở ngại.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-code"></span>
						</div>
						<div class="service-content">
							<h5>Phát triển web</h5>
							<p>Cải thiện trãi nghiệm người dùng.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-layers"></span>
						</div>
						<div class="service-content">
							<h5>Thiết kế đồ họa</h5>
							<p>Năng cáo chất lượng UX/UI.</p>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-lg-8 col-sm-offset-2 text-center mx-auto bottom-caption wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<a href="#" class="btn btn-primary">Start a Project</a>
				</div>
			</div> --}}
		</div>
	</section>
	<section id="team">
		<div class="container">
			<h2>Easy Steps To Win</h2>
			<div class="row">
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
					
					<div class="team-img">
						<img src="{{ asset('front-end-2/img/605742331eb501616331315.png') }}" width="40%" height="40%" class="img-fluid" alt="team-1">
					</div>
					<hr>
					<div class="team-caption">
						<h4>Choose product</h4>
						<ul class="social-media">
						<li><a href="#">1</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
					
					<div class="team-img">
						<img src="{{ asset('front-end-2/img/60574226a96af1616331302.png') }}" width="40%" height="40%" class="img-fluid" alt="team-1">
					</div>
					<hr>
					<div class="team-caption">
						<h4>Bid product</h4>
						<ul class="social-media">
						<li><a href="#">2</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
					
					<div class="team-img">
						<img src="{{ asset('front-end-2/img/6057421192bc21616331281.png') }}" width="40%" height="40%" class="img-fluid" alt="team-1">
					</div>
					<hr>
					<div class="team-caption">
						<h4>Easy Win</h4>
						<ul class="social-media">
						<li><a href="#">3</a></li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- <section id="call-to-action" style="background-image: url('front-end-2/img/h2_cate_2.png');">
		<div class="container">
			<h1 class="wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s">Chính sách và quy định</h1>
			<a href="#" class="btn btn-transparent wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".6s">Let's Work Together</a>
		</div>
		<div class="service-content">
							<h5>Mobile Apps</h5>
							<br>
						<div class="service-content">
							<h5>Mobile Apps</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>

	</section> --}}
	
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<!-- Core Navigation -->
	<script src="assets/js/corenav-master/corenav-master/dist/coreNavigation-1.1.3.min.js"></script>
	<!-- Owl Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Wow -->
	<script src="assets/js/wow-1.3.0.min.js"></script>
	<!-- LightBox -->
	<script src="assets/js/lightbox/dist/js/lightbox.min.js"></script>
	<!-- Custom -->
	<script src="assets/js/custom.js"></script>
    @endsection