<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
	public function index()
    {
		$data = [];
		for($i = 1; $i<=50;$i++)
		{
			$data[] = [
			"id"=>$i,
			"name"=> "name".$i,
			"description"=>"desc".$i,
			];
		}
		return view('/admin/gallery')->with('data',$data);
    }
}
