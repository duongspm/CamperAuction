<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class HinhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $sanpham = DB::table('sanpham')->where('sp_id',$id)->first();
        return view('admin.hinhanh.them',compact('sanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try
        {
            $now = Carbon::now();
            $hinhanh = $request->file('ha_ten');
            if ($request->file('ha_ten')->isValid()) {
                # code...
                $uploadPath = public_path('/upload/sanpham');
                $random = rand(1,1000);
                $tenHA = $hinhanh->getClientOriginalName();
                $hinhanh->move($uploadPath,$random.$request->sp_id.$tenHA);
                $sanpham = DB::table('hinhanh')
                ->insert(
                    [
                        'sp_id' => $request->sp_id,
                        'ha_ten' => $random.$request->sp_id.$tenHA,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );
                if($sanpham)
                {
                    $success = Session::put('alert-info', 'Thêm hình ảnh thành công! Tiếp tục nào');
                    echo "<script>
                            alert('Thêm hình ảnh thành công! Tiếp tục nào');
                        </script>";
                    return redirect()->back();
                }
                else
                {
                    $success = Session::put('alert-info', 'Thêm hình ảnh thất bại! Thử lại nào, không nản chí nhé');
                    echo "<script>
                            alert('Thêm hình ảnh thất bại! Thử lại nào, không nản chí nhé');
                        </script>";
                    return redirect()->route('danhsachsanpham');
                }
            }
            else {
                echo "Lỗi";
                return redirect()->back();
            }
        }
        
        catch (\Throwable $th) {
            $success = Session::put('alert-del', 'Thêm hình ảnh thất bại! Bạn chưa chọn hình ảnh !');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idHA, $idSP)
    {
        $hinhanh = DB::table('hinhanh')->where('ha_id',$idHA)->delete();
        $anhdaidien = DB::table('sanpham')->where('sp_id',$idSP)->update(['sp_anhdaidien' => null]);
        if($hinhanh){
            $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
            return redirect()->route('chitietsanpham',['idSP' => $idSP]);
        }
    }
}
