<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } */
	
	public function index()
    {
		return view('/auth/login');
		//echo "hello";
    }
	
	public function someMethod(Request $post)
	{
		//dd($post->all()); 
		$request_token = $post['_token']; 
		$request_email = isset($post['email']) ? $post['email'] : ''; 
		$request_password = isset($post['password']) ? $post['password'] : '';
		   
		if (Auth::attempt(array('email' => $request_email, 'password' => $request_password)))
		{
			//dd(Auth::user()->id);
			$user_id = Auth::user()->id;
			$users = DB::table('users')->where('id', $user_id)->update(['remember_token' => $request_token]);
			return redirect()->intended('admin/dashboard');
            //return "success";
        }
		else
		{
            return "Wrong Credentials";
        }
        die;
	}
}
