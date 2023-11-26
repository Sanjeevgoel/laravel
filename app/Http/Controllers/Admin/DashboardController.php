<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{	
	public function index()
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
    }
}
