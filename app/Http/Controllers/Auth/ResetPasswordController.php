<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    public function resetPassword(Request $request)
    {
        // Check token valid or not
        $result = ResetPassword::where('token', $request->token)->first();

        $data['info'] = $result->token;

        if($result){
            return view('admin/newPass', $data);
        } else {
            echo 'This link is expired';
        }
    }
    public function newPass(Request $request)
    {
        // Check password confirm
        if($request->password == $request->confirm){
            // Check email with token
            $result = ResetPassword::where('token', $request->token)->first();

            // Update new password
            User::where('email', $result->email)->update(['password'=>bcrypt($request->password)]);

            // Delete token
            ResetPassword::where('token', $request->token)->delete();

            return redirect()->route('login');
        } else {
            echo "Password doesn't match";
        }
    }
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
