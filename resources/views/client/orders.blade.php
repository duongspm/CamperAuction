@extends('client.template.master')
@section('title')
    Khách hàng
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('front-end-2/css/step.css')}}" media="screen" />
<div class="page_title_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="page_title">
          <h1>Trang cá nhân</h1>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="bredcrumb">
          <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Đơn hàng</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Đổ dữ liệu vào đây --}}
<div class="content">
  <div class="container">
    <div class="row">
      <div class="right-side col-md-9 col-md-push-3 col-sm-12">
        <h2>Đơn hàng</h2>
        <div class="col-md-12">
            @foreach ($orders as $item)
                <div class="col-md-12">
                    <h1 style="margin: 0px;">Mã đơn: #{{ $item->dh_madon }}</h1>
                    <p>Trạng thái thanh toán: @if ($item->dh_trangthai == 1)
                      <span  style="color: black; font-weight: bold;">Đang xử lý</span>
                      @elseif ($item->dh_trangthai == 2)
                      <span style="color: green;">Đã duyệt</span>
                      @elseif ($item->dh_trangthai == 3)
                      <span style="color: blue;;">Đã thanh toán</span>
                      @else
                      <span style="color: red;">Hủy đơn</span>
                      @endif</p>
                    <p>Trạng thái vận chuyển: 
                      @if ($item->dh_quatrinhvanchuyen == 1)
                        {{-- <span style="color: burlywood;">Đang trong kho</span> --}}
                        <div class="mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__supporting-text">
                            <div class="mdl-stepper-horizontal-alternative">
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>1</span></div>
                                <div class="mdl-stepper-title">Đang trong kho</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step">
                                <div class="mdl-stepper-circle"><span>2</span></div>
                                <div class="mdl-stepper-title">Đang vận chuyển</div>
                                <div class="mdl-stepper-optional">Optional</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step">
                                <div class="mdl-stepper-circle"><span>3</span></div>
                                <div class="mdl-stepper-title">Đã nhận hàng</div>
                                <div class="mdl-stepper-optional">Optional</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- <span style="color: burlywood;">Đang vận chuyển</span> --}}
                      @elseif ($item->dh_quatrinhvanchuyen == 2)
                        <div class="mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__supporting-text">
                            <div class="mdl-stepper-horizontal-alternative">
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>1</span></div>
                                <div class="mdl-stepper-title">Đang trong kho</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>2</span></div>
                                <div class="mdl-stepper-title">Đang vận chuyển</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step ">
                                <div class="mdl-stepper-circle"><span>3</span></div>
                                <div class="mdl-stepper-title">Đã nhận hàng</div>
                                <div class="mdl-stepper-optional">Optional</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- <span style="color: burlywood;">Đang nhận hàng</span> --}}
                      @else
                        <div class="mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__supporting-text">
                            <div class="mdl-stepper-horizontal-alternative">
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>1</span></div>
                                <div class="mdl-stepper-title">Đang trong kho</div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>2</span></div>
                                <div class="mdl-stepper-title">Đang vận chuyển</div>
                                <div class="mdl-stepper-optional"></div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                              <div class="mdl-stepper-step active-step step-done">
                                <div class="mdl-stepper-circle"><span>3</span></div>
                                <div class="mdl-stepper-title">Đã nhận hàng</div>
                                <div class="mdl-stepper-optional"></div>
                                <div class="mdl-stepper-bar-left"></div>
                                <div class="mdl-stepper-bar-right"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif
                    </p>
                    <a href="">Xem chi tiết</a>
                    {{-- href="{{ route('chitietdonhang', ['id'=>$value->dh_madon,'user'=>$value->dh_nguoinhan]) }}" --}}
                    {{-- <a href="{{ route('chitietdonhang', ['id'=>$value->dh_madon,'user'=>$value->dh_nguoinhan]) }}" class="btn btn-default">Chi tiết</a> --}}
                </div>
            @endforeach
        </div>

      </div>
      <div class="col-md-3 col-md-pull-9 col-sm-12">
        <div class="side-bar">
          <div class="sidebar-list widget">
            <h4>Tài khoản cá nhân</h4>
            <ul>
              <li><a href="{{ route('thong-tin-khach-hang', [ 'username' => Session::get('kh')]) }}" class="triangle">Thông tin cá nhân</a></li>
              <li><a href="{{ route('get-orders') }}" class="triangle">Đơn hàng</a></li>
              <li><a href="{{ route('wish-list') }}" class="triangle">Sản phẩm yêu thích</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection