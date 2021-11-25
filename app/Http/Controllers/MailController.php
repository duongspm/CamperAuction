<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Nhanvien;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Khachhang;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;

class MailController extends Controller
{
    //
    public function quen_mat_khau(){
        return view('client.forget_pass');
    }
    public function recover_pass(Request $request){
        $email_account = $request->email_account;
        //$data = $request->all();
        
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        $title_mail="Lấy lại mật khẩu - Camper Auction".' '.$now;
        $customer = DB::table('khachhang')->where('kh_email','=',$email_account)->get();
        //$customer = KhachHang::where('kh_email','=',$data['email_account'])->get();
        foreach($customer as $key => $value){
            $customer_id = $value->kh_id;
        }
        if($customer){
            $count_customer = $customer->count();
            if($count_customer==0)
            {
                Session::put('alert-info', 'Email chưa được đăng ký !!!');
                return redirect()->route('quen-mat-khau');
            }else{
                $token_random = Str::random();  
                $customer= KhachHang::find($customer_id);
                $customer->customer_token=$token_random;
                $customer->save();

                //Send
                $to_email = $email_account;//gửi tới email người dùng nhập
                $link_reset_pass = url('/update-new-pass?email='.$to_email.'&token='.$token_random);
                
                $data = array("name"=>$title_mail,"body"=>$link_reset_pass,'email'=>$email_account); //

                Mail::send('client.forget_pass_notify', ['data'=>$data], function ($message) use ($title_mail,$data) {
                    $message->to($data['email'])->subject($title_mail);
                    $message->from($data['email'],$title_mail);                   

                    // $message->from('john@johndoe.com', 'John Doe');
                    // $message->sender('john@johndoe.com', 'John Doe');
                    // $message->to('john@johndoe.com', 'John Doe');
                    // $message->cc('john@johndoe.com', 'John Doe');
                    // $message->bcc('john@johndoe.com', 'John Doe');
                    // $message->replyTo('john@johndoe.com', 'John Doe');
                    // $message->subject('Subject');
                    // $message->priority(3);
                    // $message->attach('pathToFile');
                });
                Session::put('alert-info', 'Email đã được gửi, bạn vui lòng kiểm tra email của mình !!!');
                return redirect()->route('quen-mat-khau');
            }
        }
    }
    public function update_new_pass(Request $request){
        return view('client.update_new_pass');
    }
    public function reset_new_pass(Request $request){
        //$data = $request->all();
        $email = $request->email;
        $token = $request->token;
        $password_account = $request->password_account;

        $token_random=Str::random();
        //$customer = KhachHang::where('kh_email','=',$data['email'])->where('customer_token','=',$data['token'])->get();
        $customer = DB::table('khachhang')->where('kh_email','=',$email)->where('customer_token','=',$token)->get();
        $count = $customer->count();
        if($count>0){
            foreach($customer as $key => $cus)
            {
                $customer_id = $cus->kh_id;
            }
            $reset = KhachHang::find($customer_id);
            //$reset->kh_password = md5($data['password_account']);   
            $reset->password = bcrypt($password_account);
            $reset->customer_token = $token_random;
            $reset->save();
            Session::put('alert-info', 'Mật khẩu đã được tạo mới, vui lòng đăng nhập lại !!!');
                return redirect()->route('dangnhapkhachhang');
        }else{
            Session::put('alert-info', 'Xác nhận lại email bởi vì liên kết đã quá hạn !');
                return redirect()->route('dangnhapkhachhang');
        }
    }
    
}
