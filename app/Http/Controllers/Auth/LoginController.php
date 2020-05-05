<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function guard()
    {
        return Auth::guard('guard-email');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('log');
        // $this->middleware('guest:users')->except('logout');
    }

    public function getlogin() {
        return view('admin.user.login');
    }
    public function getlogin1() {
        return view('index.user.index');
    }

    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:4'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            if (\Request::is('admin')) {
                return redirect('admin')->withErrors($validator)->withInput();
            } else {
                return redirect('login')->withErrors($validator)->withInput();
            }
        }  else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
            if( Auth::attempt(['email' => $email, 'password' =>$password , 'role' => 1])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('admin/products')->with('thongbao','Đăng nhập thành công ');
            } else if( Auth::attempt(['email' => $email, 'password' =>$password , 'role' => 0])){
                return redirect('index/index')->with('thongbao','Đăng nhập thành công ');
            }
           else if (\Request::is('admin')) {
            return redirect('admin')->with('thongbao','Đăng nhập không thành công ');
        } else{
                    return redirect('login')->with('thongbao','Đăng nhập không thành công ');

            }
        }
    }
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'Bạn cần xác thực tài khoản, chúng tôi đã gửi mã xác thực vào email của bạn, hãy kiểm tra và làm theo hướng dẫn.');
        }
        return redirect()->intended($this->redirectPath());
    }
    public function logout() {
        if (Auth::guard('admin')->check()) {
            Auth::logout();
            return redirect('admin');
        }
        else
        {
            Auth::logout();
            return redirect('admin');
        }
    }
    public function log() {
        if (Auth::guard('admin')->check()) {
            Auth::logout();
            return redirect('admin');
        }
        else
        {
            Auth::logout();
            return redirect('login');
        }
    }
    public function logoutindex() {
        Auth::logout();
        return redirect('admin');
    }
}


