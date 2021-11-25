@extends('admin.template.master')
@section('content')
      
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1>Chi tiết bài viết</h1>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $banner->bn_tieude }}</h3>
              <br>
              <hr/>
              <div style="background-color:hsl(0, 0%, 90%);">
                <small>Ngày đăng bài: <cite>{{ $banner->created_at }}</cite></small><br>
                <small><em>Ngày cập nhật gần nhất: <cite>{{ $banner->updated_at }}</cite></em></small>
              </div>
            </div>
            <div class="card-body">
                {!! $banner->bn_noidung !!}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </section>
    @endsection