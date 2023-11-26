<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use DB;
use Session;

class ContactController extends Controller
{
	public function index()
	{
		return view('/admin/contact');
	}
	
	public function getList()
    {
		$contact = DB::select('select * from contacts');
		//$contact = Contact::get();
		return view('/admin/contact')->with('data',$contact);
    }
    /* {
		$data = [];
		for($i = 1; $i<=1;$i++)
		{
			$data[] = [
			"id"=>$i,		
			"name"=> "name".$i,
			"description"=>"desc".$i,
			];
		}
		return view('/admin/contact')->with('data',$data);
    } */
}
