@section('title')
    Đặt mật khẩu mới
@endsection

@include('client.template.header')
    @if (Session::has('kh'))
        
    @else
         <!-- page title -->
    <div class="page_title_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page_title">
                        <h1>Đặt mật khẩu mới</h1>
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
    <div class="margin-bottom-70px">
        <div class="container">
            <div class="row">
            @if (Session::has('alert-info'))
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{Session::get('alert-info')}}</strong>
            </div>
            {{Session::put('alert-info',null)}}
            @endif
                <div class="col-md-12">
                    <div class="login ">
                        <h2>Tạo mật khẩu mới</h2>
                        <form method="POST" action="{{url('/reset-new-pass')}}">
                            @csrf
                            <div class="col-md-7">
                                @php
                                    $token = $_GET['token'];
                                    $email = $_GET['email']
                                @endphp
                                <div class="email">
                                    <label for="password_account">Mật khẩu mới<span class="required">*</span></label><br>
                                    <input name="password_account" placeholder="Nhập mật khẩu mới ..." type="password" required="">
                                  
                                    <input type="hidden" name="email" value="{{$email}}">
                                    <input type="hidden" name="token" value="{{$token}}">
                                </div>
                            </div>
                            
                            <div class="clear-fix"></div>
                            
                            <div class="col-md-6 text-center">
                                <div class="submit">
                                    <button class="btn btn-info black-bordered margin-top-20px">Submit</button>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>
                        <div class="login-method">
                            <div class="col-md-3 col-sm-6">
                                <a class="method-facebook" href="#"><i class="fa fa-facebook"></i>Đăng nhập với Facebook</a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a class="method-gmail" href="#"><i class="fa fa-google"></i>Đăng nhập với Gmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
   

@include('client.template.footer')