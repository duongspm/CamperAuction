<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class DonhangController extends Controller
{
    //hien nguoi dung
    public function getOrders()
    {
        $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
        $orders = DB::table('donhang')
                ->where('kh_id','=',$user->kh_id)
                ->get();
        // dd($orders);
        return view('client.orders',compact('orders'));
    }
    public function showgetOrders($id,$user)
    {   
        $donhang = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->first();
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        //$user = DB::table('khachhang')->where('kh_hoten','=',$user)->first();
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->get();
        //dd($donhang->sp_id);
        // dd($donhang2);

        return view('client.orders_detail', compact(['donhang','donhang1','donhang2']));

    }

    public function getOrdersAdmin()
    {
        $donhang = DB::table('donhang')->get();
        return view('admin.donhang.index',compact('donhang'));
        // return dd($loai);
    }

    public function show($id,$user)
    {   
        $donhang = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->first();
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        //$user = DB::table('khachhang')->where('kh_hoten','=',$user)->first();
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->get();
        //dd($donhang->sp_id);
        // dd($donhang2);

        return view('admin.donhang.detail', compact(['donhang','donhang1','donhang2']));

    }

    public function trangthai($id, $trangthaihientai, Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $trangthai = $request->trangthai;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_trangthai' => $trangthai]);
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->where('dh_madon','=',$donhang->dh_madon)
        ->get();


        //Tr???ng th??i ???? thanh to??n
        if($trangthaihientai == 3 && $trangthai != 3){
            foreach ($donhang2 as $key => $value1) {
                # code...
                $chitietlo = DB::table('chitietlo')->where('sp_id','=',$value1->sp_id)->get();
                $sanpham = DB::table('sanpham')->where('sp_id','=',$value1->sp_id)->get();
                foreach ($chitietlo as $key => $value2) {
                    # code...
                    $chitietloedit = DB::table('chitietlo')->where('sp_id','=', $value2->sp_id)->update([
                        'ctl_soluong' => $value2->ctl_soluong + $value1->sp_soluongsp
                    ]);
                }
                foreach ($sanpham as $key => $value3) {
                    # code...
                    $sanphamedit = DB::table('sanpham')->where('sp_id','=',$value3->sp_id)->update([
                        'sp_soluong' => $value3->sp_soluong + $value1->sp_soluongsp
                    ]);
                }
            }
            DB::table('donhang')->where('dh_id',$id)->update(['dh_thoigiannhanhang' => null]);
            $success = Session::put('alert-info', 'C???p nh???t tr???ng th??i th??nh c??ng');
            return redirect()->back();
        }
        //Thanh to??n th??nh c??ng th?? tr??? s??? l?????ng ??i
        else if($trangthai == 3)
        {
            foreach ($donhang2 as $key => $value1) {
                # code...
                $chitietlo = DB::table('chitietlo')->where('sp_id','=',$value1->sp_id)->get();
                $sanpham = DB::table('sanpham')->where('sp_id','=',$value1->sp_id)->get();
                // dd($sanpham);
                foreach ($chitietlo as $key => $value2) {
                    # code...
                    $chitietloedit = DB::table('chitietlo')->where('sp_id','=', $value2->sp_id)->update([
                        'ctl_soluong' => $value2->ctl_soluong - $value1->sp_soluongsp
                    ]);
                }
                foreach ($sanpham as $key => $value3) {
                    # code...
                    $sanphamedit = DB::table('sanpham')->where('sp_id','=',$value3->sp_id)->update([
                        'sp_soluong' => $value3->sp_soluong - $value1->sp_soluongsp
                    ]);
                }
                
            }
            DB::table('donhang')->where('dh_id',$id)->update(['dh_thoigiannhanhang' => Carbon::now()]);
            $success = Session::put('alert-info', 'C???p nh???t tr???ng th??i th??nh c??ng');
            return redirect()->back();
    
            
        }
        else if($trangthai == $trangthaihientai){
            $success = Session::put('alert-info', 'C???p nh???t tr???ng th??i th??nh c??ng');
            return redirect()->back();
        }
        //C??n l???i th?? c???ng s??? l?????ng l???i
        else {
            
            $success = Session::put('alert-info', 'C???p nh???t tr???ng th??i th??nh c??ng');
            return redirect()->back();
        }
        
    }

    public function update($id)
    {
        $now = Carbon::now();
        $data = DB::table('donhang')->where('dh_madon',$id)
                    ->update(
                        [
                            'dh_trangthai' => 2,
                            'updated_at' => $now,
                        ]
                    );

        //C???p nh???t xong c???p nh???t l???i lo???i ????? show ra k??m theo th??ng b??o
        $success = Session::put('alert-info', 'C???p nh???t d??? li???u th??nh c??ng');
        return redirect()->route('danhsachdonhang');
    } 

    public function vanchuyen($id,  Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $vanchuyen = $request->vanchuyen;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_quatrinhvanchuyen' => $vanchuyen]);
        $success = Session::put('alert-info', 'C???p nh???t th??nh c??ng');
        return redirect()->back();
    }

    public function chitiet($id,$user)
    {
        $donhang = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->first();
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        //$user = DB::table('khachhang')->where('kh_hoten','=',$user)->first();
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->get();
        //dd($donhang->sp_id);
        // dd($donhang2);

        return view('client.orders_detail', compact(['donhang','donhang1','donhang2']));
    }

    
}
