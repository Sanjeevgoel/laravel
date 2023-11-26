<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
	public function index()
    {
		$sevices = DB::select('select * from services');	
		return view('/admin/service')->with('data',$sevices);
    }
}
