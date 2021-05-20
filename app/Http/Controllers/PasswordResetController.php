<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mail;
use Redirect;

class PasswordResetController extends Controller
{
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request)
    {
		$param = $request->param;
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            
			 $reponse['status']=0;
			 $reponse['msg']='We can not find a user with that e-mail address.';
        }else{

        $token = base64_encode(Str::random(60).'^~'.$param);
		
        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => $token,
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
		
        if ($user && $passwordReset) {
			
            $data['reset_link'] = url('/') . "/reset/" . $token;

            $data['name'] = $user->name;

            $from = env('mail_from_address'); 
            $to = $user->email;
			$request->session()->put('email', $to);
            try{
				Mail::send('mails.forgot-password', compact('data'), function ($mail)
					 use ($from, $to) {
						$mail->to($to)
							->from($from, 'Covid Shield')
							->subject('Requested Password Reset');
					});
				$reponse['status']=1;
				$reponse['msg']='We’ve sent you an email to reset your password.';   
             }catch (\Exception $e) { 
				$reponse['status']=0;
				$reponse['msg']='Failed to send email!.';  
			} 
			      
        }else{
				$reponse['status']=0;
			 $reponse['msg']='Failed to send email!.';  
		}
	}
			 return response()->json($reponse, 200);
    }
	
	 
	

    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {	//$token1 = bcrypt($token);
	
        $passwordReset = PasswordReset::where('token', $token)
            ->first();
		
        if (!$passwordReset) {
            
			return Redirect::to('login')->with('errormsg','This password reset token is invalid.');
        }

        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            
			return Redirect::to('login')->with('errormsg','This password reset token is invalid.');
        }
		
		 $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

        return view('pages.auth-reset-password',[
          'pageConfigs' => $pageConfigs,'token' => $token
      ]);
    }

    /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request)
    {	
        $request->validate([
            //'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string',
        ]);
		$split = explode('^~',base64_decode($request->token));

        $passwordReset = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->session()->get('email')],
        ])->first();
        if (!$passwordReset) {
           
			return Redirect::to('reset/'.$request->token)->with('errormsg','We can not find a user with that e-mail address.');
        }

        $user = User::where('email', $passwordReset->email)->first();

        if (!$user) {
            
			return Redirect::to('reset/'.$request->token)->with('errormsg','We can not find a user with that e-mail address.');
        }

        $user->password = bcrypt($request->password);
        $user->save();
        $passwordReset->delete();
	 
			return Redirect::to('auth-login')->with('successmsg','Password Updated successfully, Please login here.');
		 
    }
    
    
}
