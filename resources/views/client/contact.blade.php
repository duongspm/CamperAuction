@extends('client.template.master')
@section('title')
    Liên hệ
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('front-end-2/css/contact.css')}}" media="screen" />
<script src="{{asset('front-end-2/js/contact.js')}}"></script>
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
<!-- page title -->
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Liên hệ chúng tôi</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ page title -->

<div class="container">
    <!--  Boxed Content -->
    <div class="row margin-bottom-50px">
        <div class="col-md-4 col-sm-6">
            <div class="boxed-content-container sm-mb-40">
                 <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Trả lời nhanh</h4>
                    <p>trong vòng<span class="hours"> 48h</span></p>
                    <p>Chúng tôi sẽ phản hồi email của quý khách trong khoảng thời gian nhanh nhất có thể</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="boxed-content-container sm-mb-40">
                <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Liên hệ hỗ trợ</h4>
                    <p class="phone-email">Phone: (+84) 396752611</p>
                    <span class="and">&</span>
                    <p class="phone-email">E-mail:  camperacution@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">  
            <div class="boxed-content-container">
                <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Giờ làm việc</h4>
                    <p><b>Thứ 2. - Thứ 7. : 8 AM -10 PM</b></p>
                    <p><b>Chủ nhật : 10 AM -1 PM</b></p>
                    <p><b><br></b></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contact">
		<div class="svg-wave">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
				<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
			</svg>
		</div>
		<div class="container">
			<h2>LIÊN HỆ CHÚNG TÔI</h2>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					{{-- <h4>Get In Touch</h4>
					<a href="#" class="email-link">youremail@gmail.com</a>
					<p>+212 (342) 298 1042</p>
					<p>2100/32 New York, Adress example, lorem ipsum. <b>USA</b></p>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul> --}}
					<img src="{{ asset('front-end-2/img/60583787029ef1616394119.png') }}" width="400" height="400">
				</div>
				<div class="col-lg-8 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<h4>Chúng tôi có thể giúp gì cho bạn</h4>
					<form>
						<div class="row">
							<div class="col">
								<input type="email" class="form-control" placeholder="email:">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="subject:">
							</div>
						</div>
						<!-- Form Group -->
						<div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
							<textarea id="form-message" cols="30" rows="5" class="form-control" placeholder="Message:" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Gửi</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection