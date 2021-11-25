@extends('admin.template.master')
@section('content')
      
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1>Quản lý banner | Bài viết</h1>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sửa Banner</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Sửa banner | Bài viết</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('capnhatbanner', ['id'=>$bn->bn_id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề</label>
                  <input name="tieude" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$bn->bn_tieude}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh banner</label>
                    <br>
                    <input type="file" name="hinhanh" id="fileInput"/>
                    <div class="row justify-content-center js-file-list" id="showImage">
                        <img src="{{ asset('upload/banner') }}/{{$bn->bn_hinhanh}}" alt="Ảnh banner" class="js-file-image" width="50%">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nội dung bài viết</label>
                    {{-- <textarea name="thongTin" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                    <textarea 
                    class="textarea noidung" 
                    id="noidung"
                    name="noidung"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$bn->bn_noidung}}
                    </textarea>
                    
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="{{ route('banner') }}" class="btn btn-default">Quay về</a>
              </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <script>
        $(function () {
          // Summernote
          $('.textarea').summernote()
        })
      </script>
      <script>
        $(document).ready(function(){
            $('#fileInput').on('change', function() {
                var file = $(this)[0].files[0];

                var fileReader = new FileReader();
                fileReader.onload = function() {
                    var imageSrc = event.target.result;
                    $('.js-file-image').attr('src', imageSrc);
                };
                fileReader.readAsDataURL(file);
            });
        });
    </script>
@endsection