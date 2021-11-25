@extends('client.template.master')
@section('title')
    Chính sách bảo mật
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
    <div>
		<section id="call-to-action" style="background-image: url('front-end-2/img/aboutdegrey.png'); display:block;">
			<div class="container">
				<h1 class="wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s" style="color:black">Chính sách bảo mật</h1>
			</div>
		</section>
		<p style="height:20px;">&nbsp;</p>
		<div class="container">
            <h3><strong>Mục đích và phạm vi thu thập</strong></h3>
			<span>Việc thu thập dữ liệu chủ yếu trên website bao gồm: họ tên, email, điện thoại, địa chỉ khách hàng trong mục liên hệ. Đây là các thông tin mà Camper Auction cần thành viên cung cấp bắt buộc khi gửi thông tin nhờ tư vấn hay muốn mua sản phẩm và để liên hệ xác nhận lại với khách hàng trên website nhằm đảm bảo quyền lợi cho cho người tiêu dùng.
    Các thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới thông tin mà mình cung cấp và hộp thư điện tử của mình. Ngoài ra, thành viên có trách nhiệm thông báo kịp thời cho webiste về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp.</span>
			<p style="height:20px;">&nbsp;</p>
			
             <h3><strong>Phạm vi sử dụng thông tin</strong></h3>
			<span>Công ty sử dụng thông tin thành viên cung cấp để:</span>
            <br>
                <blockquote style="font-size:14px" > 
                    • Liên hệ xác nhận đơn hàng và giao hàng cho thành viên khi nhận được yêu cầu từ thành viên.
                    <br>
                    • Gửi email tiếp thị, khuyến mại về hàng hóa do chúng tôi bán.
                    <br>
                    • Gửi các thông báo về các hoạt động trao của website Camper Auction.
                    <br>
                    • Liên lạc và giải quyết với người dùng trong những trường hợp đặc biệt.
                    <br>
                    • Không sử dụng thông tin cá nhân của người dùng ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch tại Cửa hàng.
                    <br>
                    • Lấy lại mật khẩu của tài khoản bằng gmail đã đăng ký.
                    <br>

                </blockquote>
           
			<p style="height:20px;">&nbsp;</p>
			
             <h3><strong>Thời gian lưu trữ thông tin</strong></h3>
			<span>Thành viên có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách liên hệ với ban quản trị website Camper Auction thực hiện việc này.
Thành viên có quyền gửi khiếu nại về nội dung bảo mật thông tin đề nghị liên hệ Ban quản trị của website Camper Auction. Khi tiếp nhận những phản hồi này, Camper Auction sẽ xác nhận lại thông tin, trường hợp đúng như phản ánh của thành viên tùy theo mức độ, Camper Auction sẽ có những biện pháp xử lý kịp thời.</span>
			
            <p style="height:20px;">&nbsp;</p>
			
             <h3><strong>Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình.</strong></h3>
			<span>Việc thu thập dữ liệu chủ yếu trên website bao gồm: họ tên, email, điện thoại, địa chỉ khách hàng trong mục liên hệ. Đây là các thông tin mà Camper Auction cần thành viên cung cấp bắt buộc khi gửi thông tin nhờ tư vấn hay muốn mua sản phẩm và để liên hệ xác nhận lại với khách hàng trên website nhằm đảm bảo quyền lợi cho cho người tiêu dùng.
    Các thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới thông tin mà mình cung cấp và hộp thư điện tử của mình. Ngoài ra, thành viên có trách nhiệm thông báo kịp thời cho webiste về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp.</span>
            
            <p style="height:20px;">&nbsp;</p>
			
             <h3><strong>Cam kết bảo mật thông tin cá nhân khách hàng.</strong></h3>
			<blockquote style="font-size:14px" > 
                - Thông tin cá nhân của thành viên trên Camper Auction được Camper Auction cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của khách hàng. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.
                <br>
                - Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của thành viên khi không có sự cho phép đồng ý từ thành viên.
                <br>
                - Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, Camper Auction sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho thành viên được biết.
                <br>
                - Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của thành viên bao gồm thông tin hóa đơn kế toán chứng từ số hóa trên Camper Auction
                <br>
                - Ban quản lý Camper Auction yêu cầu các cá nhân khi đăng ký/mua hàng phải cung cấp đầy đủ thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, điện thoại,…., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản lý Camper Auction không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của thành viên đó nếu xét thấy tất cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.

            </blockquote>
	
			
		</div>
		
	</div>
@endsection