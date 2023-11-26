<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	/*  public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		if(Auth::user())
		{
			$data = [];
			for($i = 1; $i<=5;$i++)
			{
				$data[] = [
				"id"=>$i,
				"name"=> "name".$i,
				"description"=>"desc".$i,
				];
			}
			return view('/admin/dashboard')->with('data',$data);
			//return view('/admin/dashboard');
		}
		else
		{
			return view('home');
		}
    }
}
