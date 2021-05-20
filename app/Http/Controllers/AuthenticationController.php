<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Helper;
use DB;
use Auth;
use Session;
use Redirect;

class AuthenticationController extends Controller
{
    // Login
    public function login(){
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];

        return view('/pages/auth-login', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Register
    public function register(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-register', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Forgot Password
    public function forgot_password(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-forgot-password', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Reset Password
    public function reset_password(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-reset-password', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Lock Screen
    public function lock_screen(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-lock-screen', [
          'pageConfigs' => $pageConfigs
      ]);
    }
	 public function userLogin(Request $request)
   {


    return view('/pages/dashboard-analytics');
	   
    // 		$validatedData = $request->validate([
	// 			'email' => 'required',
	// 			'password'=>'required',
	// 		]);
			
	// 		$input = $request->all();
	// 		$result = DB::table('Users')->where('email', $input['email'])->whereIn('role_type',[1,2])->first();
			
	// 		if(empty($result))
	// 		{
	// 			return Redirect::to('auth-login')->with('errormsg','Incorrect Email ID / Password'); 
	// 		} 
	// 		$status = $result->status;  
			
	// if($status == 1){
    //     if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			 
	// 		 		return Redirect::to('dashboard-analytics'); 
				 
	// 	} else {
    //         return Redirect::to('auth-login')->with('errormsg','Invalid credential'); 
    //     } 
	// } else {
    //         return Redirect::to('auth-login')->with('errormsg','Your Account is deactivated now, please contact Administrator.'); 
    //     } 
   }
	 
	public function logout() {
	 
		Auth::logout();
		return Redirect::to('auth-login');
	}
}
