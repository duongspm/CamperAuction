@extends('client.template.master')
@section('title')
    Giới thiệu
@endsection
@section('content')
	
<!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page_title">
						<h1>GIỚI THIỆU</h1>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="bredcrumb">
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	
	<!-- about shop area -->
	<div class="about_our_shop_area margin-bottom-100px">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="about_shop_img">
						<img src="{{ asset('front-end-2/img/bidlab.png') }}" alt="" />
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="about_shop_content">
                        <h2>Giới thiệu về chúng tôi</h2>
						<br>
						<h3><strong>Why Choose Camper</strong></h3>
						<span>Chúng tôi đã xây dựng nhiều lần về độ tin cậy, tính chính trực, tính minh bạch, sự tin cậy và sự xuất sắc trong các dịch vụ đấu giá.</span>
						<hr>
						<h3><strong>Giá thầu và đấu giá hàng ngày</strong></h3>
						<span>Chúng tôi cung cấp đấu thầu cơ sở hàng ngày. Khi giá thầu đã được lên lịch, bạn không còn phải lo lắng về việc theo dõi tích cực cuộc đấu giá.</span>
						<hr>
						<h3><strong>Bảo đảm sự hài lòng</strong></h3>
						<span>Chúng tôi đảm bảo bạn sẽ hài lòng 100% khi đấu giá, chúng tôi là nền tảng đấu giá trực tuyến đáng tin cậy nhất, nơi bạn có thể bán tất cả các mặt hàng có sẵn một cách dễ dàng.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div >
		<section id="call-to-action" style="background-image: url('front-end-2/img/aboutdegrey.png'); display:block;">
			<div class="container">
				<h1 class="wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s" style="color:black">Giới thiệu</h1>
			</div>
		</section>
		<p style="height:20px;">&nbsp;</p>
		<div class="container">
			<span>Cái tên Camper Auction được tạo ra rất ngẫu hứng, xuất phát từ “Chuỗi ngày u buồn về sự nghiệp, tương lai trong quá khứ của chính mình” 
			– theo lời chia sẻ của Camper Auction founder. Là một local brand theo hướng đấu giá các sản phẩm thời trang là chính, kết hợp giữa hai yếu tố truyền thống và hiện đại, 
			Camper Auction luôn cố gắng mang đến những thông điệp văn hoá ý nghĩa qua các hoạt động. Tiếp theo đó sự sang trọng, 
			thanh lịch cũng là những yếu tố tạo nên một Camper Auction đầy sức hút, sự lựa chọn hoàn hảo dành cho các bạn trẻ yêu thích phong cách hoài cổ nhưng vẫn muốn thoát xác trong những bộ cánh mới mẻ hơn.</span>
			<p style="height:20px;">&nbsp;</p>
			<span>Thành lập từ năm 2021 và được nhiều bạn trẻ biết đến qua những phiên đấu giá truyền thông, Degrey hiện đang từng bước khẳng định vị trí của mình trong bản đồ streetwear Việt Nam. </span>
			<p style="height:20px;">&nbsp;</p>
			<span>Hiện nay, Camper Auction vẫn đang tiếp tục hoàn thiện và phát triển về sản phẩm cũng như mở rộng nhiều phong cách thời trang. </span>
			
		</div>
		
	</div>
	

	<!--/ about shop area -->
	
	{{-- <!-- about team area -->
	<div class="about_our_team_area margin-bottom-80px">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 margin-bottom-50px">
					<h2 class="trendify-heading middle-align"><span class="lg">chúng tôi là ai</span><span class="sm"> thành viên -</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.5s" >
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/avatar-face-02.png') }}" alt="" width="100%" height="100%"/>
						<h2>Uncle Duongg</h2>
						<p>Chủ thớ</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.6s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/avatar-face-03.png') }}" alt="" width="100%" height="100%"/>
						<h2>Duong TV</h2>
						<p>Bảo vệ</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.7s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/avatar-face-04.png') }}" alt="" width="100%" height="100%"/>
						<h2>Mr.Duong</h2>
						<p>Nhân viên</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.8s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/avatar-face-05.png') }}" alt="" width="100%" height="100%"/>
						<h2>Duongg</h2>
						<p>Nhân viên thu ngân</p>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--/ about team area -->
	@yield('addabout')
	<!-- about prograss bar -->
	{{-- <div class="our_experiences_area margin-bottom-50px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 margin-bottom-50px">
					<h2 class="trendify-heading"><span class="lg">chúng tôi đã làm</span><span class="sm">kinh nghiệm -</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 barWrapper">
					<h3 class="progressText">thị trường nội địa</h3>
					<div class="progress">
						<div class="progress-bar cloth-design" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
						</div>
						<span class="bar_over">80%</span>
                    </div>

                    <h3 class="progressText">thị trường quốc tế</h3>
					<div class="progress">
						<div class="progress-bar cloth-design" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
						</div>
						<span class="bar_over">75%</span>
                    </div>
				</div>
				<div class="col-md-6 col-sm-12 experience_content">
					<h4>Đầu tiên Camper Auction xin chào các bạn.</h4>
                    <p>Trong xu thế phát triển tất yếu của “Bán đấu giá”, Camper Auction đã được hình thành. Với một Hội đồng cố vấn gồm các chuyên viên đấu giá, luật sư nhiều năm kinh nghiệm và được điều hành bởi các đấu giá viên chuyên nghiệp của Bộ Tư pháp, chúng tôi là một trong 18 đơn vị bán đấu giá chuyên nghiệp trên địa bàn thành phố Hà Nội được Sở Tư pháp Thành phố tổng hợp trong báo cáo số 35/BC-STP, ngày 15 tháng 8 năm 2011. Là đơn vị đấu giá duy nhất được Chủ tịch Ủy ban nhân dân Thành phố tặng bằng khen. Chúng tôi hiện có Chi nhánh tại các thành phố lớn trên toàn quốc như: Thành phố Hồ Chí Minh, Thành phố Đà Nẵng, cũng như các Văn phòng đại diện trên toàn địa bàn thành phố.</p>
					<p>Chúng tôi được biết Quý Khách hàng đang có nhu cầu về bán đấu giá, vì vậy chúng tôi xin tổ chức bán đấu giá cho Quý Khách hàng.</p>
					<p>Với phương châm hoạt động: “Đem lại hiệu quả kinh tế vượt trội”, chúng tôi hy vọng sẽ làm hài lòng Quý Khách và mong muốn được đồng hành cùng Quý Khách hàng trong suốt quá trình hoạt động và phát triển.</p>
				</div>
			</div>
		</div>
	</div> --}}
	<!--/ about prograss bar -->
@endsection    