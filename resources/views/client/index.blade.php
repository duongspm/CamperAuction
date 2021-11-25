@extends('client.template.master')
@section('title')
    Trang chủ
@endsection
@section('content')
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
    
    
    <!-- content -->
    <div class="content">
        <div class="container">
            <!-- Latest items -->
            <div class="latest-items margin-bottom-50px">
                <div class="trendify-tab-title">
                    <ul>
                        <li class="active"><a data-toggle="tab" href="#new">Sản phẩm mới</a></li>
                        <li><a data-toggle="tab" href="#flashsale">Sản phẩm sắp ra sàn</a></li>
                    </ul>
                </div>
                <div class="tab-content">

                    <div class="trendify-prev"></div>
                    <div class="trendify-next"></div>
                    {{-- Sản phẩm mới --}}
                    <div id="new" class="tab-pane fade in active">
                        @foreach ($sanphammoi as $item => $value)
                        <div class="product-single fadeInDown wow" data-wow-delay="0.5s">
                            <div class="product-img " style="height: 300px">
                                <img class="img-responsive" alt="Single product" style="height: 100%" src="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}">
                                <div class="actions">
                                    <ul>
                                        <li><a class="zoom" href="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
										<li><a href="{{ route('add-wish-list', ['idProduct'=> $value->sp_id]) }}"><i class="fa fa-heart-o" style="color:red"></i></a></li>
										<li><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h2><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}">{{ $value->sp_ten }}</a></h2>
                                {{-- <div class="star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </div> --}}
                                <div class="price">
                                    @if (Session::has('ngoaite'))
                                        @if (number_format($value->sp_giakhuyenmai) == 0)
                                            {{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                        @else
                                            <p style="text-decoration: line-through">{{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                            {{ number_format($value->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                        @endif
                                    @else
                                        @if (number_format($value->sp_giakhuyenmai) == 0)
                                            {{ number_format($value->sp_giaban) }} VNĐ
                                        @else
                                            <p style="text-decoration: line-through">{{ number_format($value->sp_giaban) }} đ</p>
                                            {{ number_format($value->sp_giakhuyenmai) }} VNĐ
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Flash sale --}}
                    
                    {{-- <div id="flashsale" class="tab-pane fade">
                        @foreach ($newAuction as $item => $value)
                        <div class="product-single">
                            <div class="product-img" style="height: 300px">
                                <img class="img-responsive" style="height: 100%" alt="Single product" src="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}">
                                <div class="actions">
                                    <ul>
                                        <li><a class="zoom" href="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
										<li><a href="{{ route('add-wish-list', ['idProduct'=> $value->sp_id]) }}"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h2>{{ $value->sp_ten }}</h2>
                                <div class="star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </div>
                                <div class="price">
                                    @if (Session::has('ngoaite'))
                                    @if (number_format($value->sp_giakhuyenmai) == 0)
                                        {{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                        {{ number_format($value->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @endif
                                @else
                                    @if (number_format($value->sp_giakhuyenmai) == 0)
                                        {{ number_format($value->sp_giaban) }} VNĐ
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($value->sp_giaban) }} đ</p>
                                        {{ number_format($value->sp_giakhuyenmai) }} VNĐ
                                    @endif
                                @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                    

                </div>
            </div>
            <!-- Latest items -->
            <!-- our history -->
            <div class="our-histry margin-bottom-100px">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="trendify-heading middle-align">
                            <span class="lg">Sản phẩm vừa xem</span>
                            <span class="sm">Sản phẩm vừa xem</span> 
                        </h2>
                    </div>
                </div>
                <div class="row product-grid">
                    @if (Session::has('products.recently_viewed'))
                        @foreach ($spdaxem as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-latest-product margin-bottom-30px">
                                <span class="price-label">@if (Session::has('ngoaite'))
                                    @if (number_format($item->sp_giakhuyenmai) == 0)
                                        {{ number_format($item->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($item->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                        {{ number_format($item->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @endif
                                @else
                                    @if (number_format($item->sp_giakhuyenmai) == 0)
                                        {{ number_format($item->sp_giaban) }} VNĐ
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($item->sp_giaban) }} đ</p>
                                        {{ number_format($item->sp_giakhuyenmai) }} VNĐ
                                    @endif
                                @endif</span>
                                <img class="img-responsive" src="{{ asset('upload/sanpham/'.$item->sp_anhdaidien) }}" alt="Shoe">
                                <h4>{{ $item->sp_ten }}</h4>
                                <div class="actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('add-cart', ['id'=> $item->sp_id]) }}"><i class="fa fa-plus"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="pull-right">
                                                <li><a class="zoom" href="{{ asset('upload/sanpham/'.$item->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
                                                <li><a href="{{ route('add-wish-list', ['idProduct'=> $item->sp_id]) }}"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- our history -->
            <section id="portfolio">
		<div class="svg-wave">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
				<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
			</svg>
		</div>
		<div class="container-fluid wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
			<h2>Loại sản phẩm</h2>
			<div class="row">
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_1.png') }}" alt="1">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://theme.hstatic.net/1000281824/1000704890/14/h2_cate_1.jpg?v=458" data-lightbox="image-1" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_3.png') }}"  alt="2">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://theme.hstatic.net/1000281824/1000704890/14/h2_cate_1.jpg?v=458" data-lightbox="image-2" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_4.png') }}"  alt="3">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://theme.hstatic.net/1000281824/1000704890/14/h2_cate_1.jpg?v=458" data-lightbox="image-3" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_5.png') }}" alt="4">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-4" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_2.png') }}"alt="5">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-5" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="{{asset('front-end-2/img/h2_cate_1.png') }}" alt="6">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-6" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
			</div>
		</div>
	</section>
            <!-- latest blogs -->
            {{-- <div class="latest-blogs margin-bottom-70px">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="trendify-heading middle-align">
                            <span class="lg">Khách hàng</span>
                            <span class="sm">ý kiến khách hàng</span> 
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-news fadeInUp wow" data-wow-delay="0.5s">
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="thumbs">
                                    <img class="img-responsive" alt="blog post" src="{{ asset('front-end-2/img/blog1.jpg') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="news-content">
                                    <h2>Winifred Stein</h2>
                                    <p class="excerpt">We have used this site of years and they have always been successful in achieving sales, especially on-premises</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-news fadeInUp wow" data-wow-delay="0.5s">
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="thumbs">
                                    <img class="img-responsive" alt="blog post" src="{{ asset('front-end-2/img/blog3.jpg') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="news-content">
                                    <h2>Martina Frederick</h2>
                                    <p class="excerpt">Very professional and quick. spot-on advice and valuation. Prompt reassuring and honest services. Thank you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div> --}}

            <!-- /latest blogs -->

            <!-- clients -->
            <div class="clients margin-bottom-10px">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="trendify-heading middle-align">
                            <span class="sm">Thương hiệu uy tín</span> 
                        </h2>
                    </div>
                </div>
                <ul class="client-carousel">
                    @foreach ($thuonghieu as $item => $value)
                        <li>
                            <a href="#"><img alt="logo" src="{{asset('/upload/hinhanh')}}/{{ $value->th_logo }}" style="width: 194px !important; height:194px !important "></a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <!--/ clients -->


        </div>
    </div>
    <!-- / content -->
    
@endsection
