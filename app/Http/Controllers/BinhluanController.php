<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use App\Binhluan;
use Carbon\Carbon;
class BinhluanController extends Controller
{

    //Show comment
    public function getComment()
    {
        
    }


    //Comment ở đây
    public function comment(Request $request, $product_id)
    {
        $now = Carbon::now();
        try{
            $product = DB::table('sanpham')->where('sp_id','=',$product_id)->first();
            $rating_old = $product->sp_danhgia;
            $rating_new = ($rating_old + $request->rating) / 2;
            if($rating_old == '')
            {
                DB::table('sanpham')->where('sp_id','=',$product_id)->update(
                    [
                        'sp_danhgia' => $request->rating
                    ]
                );
            }
            else
            {
                DB::table('sanpham')->where('sp_id','=',$product_id)->update(
                    [
                        'sp_danhgia' => $rating_new
                    ]
                );
            }
    
            $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
            $binhluan = DB::table('binhluan')->insert([
                'sp_id' => $product_id,
                'kh_id' => $user->kh_id,
                'bl_noidung' => $request->noidung,
                'created_at' => $now,
            ]);
            echo "<script>alert('Cảm ơn');</script>";
            return redirect()->back();
        } catch (\Throwable $th) {
            echo "<script>alert('Binh luan that lai');</script>";
            return redirect()->back();

        }


        
    }
    public function edit($id)
    {
        // $data = Binhluan::findOrFail($id);
        $data = DB::table('binhluan')->where('bl_id', $id)->first();
        return response()->json($data,200);
    }
    public function update(Request $request, $id)
    {
        $bl_noidung = $request->bl_noidung;
        DB::table('binhluan')->where('bl_id','=',$id)->update(
            [
                'bl_noidung' => $bl_noidung,
            ]
        );
        return redirect()->back();
    }
    public function destroy($id)
    {
        // DB::table('binhluan')->where('bl_id','=',$id)->delete();
        // return back();

        $data = DB::table('binhluan')->where('bl_id',$id)->delete();
        echo "<script>alert('Đã có lỗi xảy ra');</script>";
        return back();
    }
}
