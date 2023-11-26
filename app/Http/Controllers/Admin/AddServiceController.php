<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Service;
use Illuminate\Http\Request;
use Session;

class AddServiceController extends Controller
{
	public function index()
	{
		return view('/admin/addservice');
	}
	
	public function getForm($id)
	{
	   $Service = Service::find($id);
	   return view('/admin/addservice')->with('Service',$Service);
	}
  
	public function createservice(Request $request)
	{
		$data = $request->input();
		
		if($request->hasfile('image')) 
		{
			$path = Storage::putFile('public', $request->file('image'));
			$data['image'] = basename($path);
		}
			
		if($data['id'] == NULL)
		{
			$create = Service::create($data);
			$services = Service::find($create->id);
			Session::flash('message', 'Save Successfully!'); 
			return redirect('/admin/addservice')->with('Service',$services);
		}
		else
		{
			$id = $data['id'];
			unset($data['id']);
			unset($data['_token']);
			$create = Service::where('id',$id)->update($data);
			$service = Service::find($id);
			Session::flash('message', 'Edit Successfully!'); 
			return redirect('/admin/addservice/'.$id);		
		}

		  //$create = Service::create($data);
		  //dd($create);
		  //return view('/admin/addservice');
	}
	
	public function getDelete($id)
	{
		$Service = Service::find($id);
		$Service->delete();
		Session::flash('message', 'Delete Successfully!'); 
		return redirect('/admin/service');	
	}
}
