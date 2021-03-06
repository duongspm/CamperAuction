<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Cart;
use Auth;
class TrangchuController extends Controller
{

    public function index(Request $request)
    {
        $sanphammoi = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->paginate(5);
        $flashsale = DB::table('sanpham')->where('sp_trangthai','=',1)->where('sp_giakhuyenmai','>',0)->get();//Lấy banner ra ngoài
        $banner = DB::table('banner')->where('bn_trangthai','=',1)->get();
        $countBanner = DB::table('banner')->where('bn_trangthai','=',1)->count();
        $thuonghieu = DB::table('thuonghieu')->get();

        //sản phẩm mới thêm
        $newAuction = DB::table('sanpham')->join('dau_gia_san_pham','dau_gia_san_pham.sp_id','=','sanpham.sp_id')->where('dgsp_trangthai','=',1)->get();

        //Đây là cái mảng nè
        $products_viewed = session()->get('products.recently_viewed');
        // $request->session()->forget('products.recently_viewed');
        // $count_products = count($products);
        if($products_viewed)
        {
            $spdaxem = DB::table('sanpham')->whereIn('sp_id',$products_viewed)->get();
            return view('client.index',compact(['sanphammoi','flashsale','banner','spdaxem','thuonghieu','thuonghieu','countBanner','newAuction']));
        }
       
        
        
        // dd($products_viewed);
        // dd($spdaxem);
        
        return view('client.index',compact(['sanphammoi','flashsale','banner','thuonghieu','countBanner']));
    }

    public function getCategory ($idCategory)
    {

        //Lấy ra loại sản phẩm
        $category = DB::table('loai')
                    ->where('l_id', $idCategory)
                    ->first();
        //Đếm số sản phẩm trong loại đó
        $countProduct = DB::table('sanpham')
                        ->where('l_id',$idCategory)->where('sp_trangthai',1)->where('sp_giaban','>',0)
                        ->count();

        //Lấy thông tin sản phẩm trong loại
        $product = DB::table('sanpham')
                    ->where('l_id',$idCategory)->where('sp_trangthai',1)->where('sp_giaban','>',0)
                    ->paginate(5);
        $sanphamKM = DB::table('sanpham')->where('l_id',$idCategory)->where('sp_giakhuyenmai','>','0')->paginate(3);

        $productPopular = DB::table('sanpham')
                    ->where('l_id',$idCategory)->where('sp_danhgia','>=',4)
                    ->where('sp_trangthai',1)
                    ->paginate(3);
        //Lấy hình ảnh của sản phẩm đã được phân loại
        $productImage = DB::table('sanpham')->join('hinhanh','hinhanh.sp_id','=','sanpham.sp_id')->where('l_id',$idCategory)->first();
        
        // return dd($productPopular);
        //Truyền tất cả ra view cho nó ok
        return view('client.category', compact(['category', 'countProduct', 'product', 'productImage','productPopular','sanphamKM']));
    }

    public function getProduct ($idProduct)
    {
        // $product = DB::table('sanpham')->where('sanpham.sp_id', $idProduct)
        //             ->join('congdung','congdung.cd_id','=','sanpham.cd_id')
        //             ->join('congdungphu','congdungphu.cdp_id','=','sanpham.cdp_id')
        //             ->join('dau_gia_san_pham','dau_gia_san_pham.sp_id','=','sanpham.sp_id')
        //             ->first();
        $product = DB::table('sanpham')->where('sanpham.sp_id', $idProduct)
        ->join('dau_gia_san_pham','dau_gia_san_pham.sp_id','=','sanpham.sp_id')
        ->first();

        $detailAuction = DB::table('chi_tiet_dau_gia_san_pham')->where('dgsp_id', $product->dgsp_id)
        ->join('khachhang','khachhang.kh_id','=','chi_tiet_dau_gia_san_pham.kh_id')
        ->get();
        // dd($product);
        $category = DB::table('loai')->where('l_id','=',$product->l_id)->first();
        $productImage = DB::table('hinhanh')->where('sp_id', $idProduct)->get();

        $productCate = DB::table('sanpham')->where('l_id','=',$category->l_id)->where('sp_id','<>',$idProduct)->where('sp_trangthai','=',1)->get();
        $now = Carbon::now();
        //Đánh dấu sản phẩm đã xem lưu vào session để lấy sản phẩm đã xem
        session()->push('products.recently_viewed', $idProduct);

        //Lấy comment của sản phẩm đó ra
        $comment = DB::table('binhluan')->where('sp_id','=',$idProduct)->join('khachhang','khachhang.kh_id','=','binhluan.kh_id')->orderBy('bl_id','desc')->get();

        // dd(Session::get('kh'));
        return view('client.product-detail',compact(['product',
        'productImage','productCate','category','comment','detailAuction']));
    }

    public function getAllProduct (){
        //Lẫy ngẫu nhiên sản phẩm
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $productPopular = DB::table('sanpham')->where('sp_danhgia','>=', 3)->paginate(2);
        $allCategory = DB::table('loai')->get();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        return view('client.product',compact(['allProduct','allCategory','countProduct','newProduct']));
    }

    public function getAllProduct2 (){
        //Lẫy ngẫu nhiên sản phẩm
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $allCategory = DB::table('loai')->get();
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        return view('client.product-2',compact(['allProduct','allCategory','countProduct','newProduct']));
    }


    public function searchProduct (Request $request){
        $search = $request->get('search');
        $count = DB::table('sanpham')->where('sp_ten','LIKE','%'.$search.'%')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->count();
        $data = DB::table('sanpham')->where('sp_ten','LIKE','%'.$search.'%')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->get();
        return view('client.product-search',compact(['count','data','search']));
    }

    public function getBanner($idBanner) {
        $banner = DB::table('banner')->where('bn_id','=',$idBanner)->first();
        return view('client.banner',compact('banner'));
    }

    public function saveAuction(Request $request) {
       try {
           //code...
            $idAuction = $request->idAuction;
            $name = $request->name;
            $idCus = DB::table('khachhang')->where('username', $request->name)->first();
            $data = [
                'dgsp_id' => $idAuction,
                'kh_id' => $idCus->kh_id,
                'ctdgsp_gia' => intval($request->price),
                'ctdgsp_sogiaydaugia' => $request->time,
                'ctdgsp_thoigianthuc' => $request->timeLocal
            ];
            $save = DB::table('chi_tiet_dau_gia_san_pham')->insert($data);
            $success = [
                'code' => 200,
                'msg' => 'success',
                'data' => $data,
                'name' => $idCus
            ];
            return response()->json($success, 200);
       } catch (\Throwable $th) {
           //throw $th;
           return response()->json($th, 401);
       }
    }
    public function getProductAuction (){
        //Lấy sản phẩm sắp đấu giá
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $allCategory = DB::table('loai')->get();
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        $newAuction = DB::table('dau_gia_san_pham')->where('dgsp_trangthai','=',1)->get();
        return view('client.index',compact(['allProduct','allCategory','countProduct','newProduct','newAuction']));
    }
}
