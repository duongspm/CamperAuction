<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
class WishlistController extends Controller
{
    public function addWishList($idProduct) {
        if(Session::has('kh')){
            $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
            $product = DB::table('wishlists')->where('product_id','=',$idProduct)->first();
            if($product){
                Session::flash('Đã thêm vào danh sách');
                return redirect()->back();
            }else{
                DB::table('wishlists')->insert([
                    'user_id' => $user->kh_id,
                    'product_id' => $idProduct
                ]);
                return redirect()->back();
            }
        }
        else{
            return view('client.login');
        }
    }

    public function getWishList(){
        
        if(Session::has('kh')){
            $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
            $user_id = $user->kh_id;
            $wishList = DB::table('wishlists')->join('sanpham','sanpham.sp_id','=','wishlists.product_id')->where('user_id','=',$user_id)->get();
            return view('client.wish-list',compact('wishList',$wishList));
        }
        else {
            return view('client.login');
        }
    }
    public function getAuction (){
        //Lấy sản phẩm sắp đấu giá
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $allCategory = DB::table('loai')->get();
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        $newAuction = DB::table('dau_gia_san_pham')->where('dgsp_trangthai','=',1)->get();
        return view('client.product-2',compact(['allProduct','allCategory','countProduct','newProduct','newAuction']));
    }
}
