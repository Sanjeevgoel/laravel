<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;

class AlbumsController extends Controller
{

  public function getList()
  {
    $albums = Album::with('Photos')->get();
	//dd($albums);
    return view('/admin/gallery')->with('album',$albums);
  }
  
  public function getAlbum()
  {
    //$album = Album::with('Photos')->where('id',$id)->get();
    return view('/admin/createalbum');
  }
  
  public function getForm($id)
  {
	$album = Album::with('Photos')->find($id);
	//dd($album);
    return view('/admin/createalbum')->with('album',$album);
  }
  
  public function postCreate(Request $request)
  {
    $data = $request->input();	
	
	if ($request->hasfile('cover_image')) 
	{
		$path = Storage::putFile('public', $request->file('cover_image'));
		$data['cover_image'] = basename($path);
	}	
	
	if($data['id'] == NULL)
	{
		$create = Album::create($data);
		$album = Album::with('Photos')->find($create->id);
		Session::flash('message', 'Save Successfully!'); 
		return redirect('/admin/createalbum')->with('album',$album);
	}
	else
	{
		$id = $data['id'];
		unset($data['id']);
		unset($data['_token']);
		$create = Album::where('id',$id)->update($data);
		$album = Album::with('Photos')->find($id);
		Session::flash('message', 'Edit Successfully!'); 
		return redirect('/admin/createalbum/'.$id);		
	}
  }

  public function getDelete($id)
  {
    $album = Album::find($id);

    $album->delete();
	Session::flash('message', 'Delete Successfully!'); 
	return redirect('/admin/gallery');	
  }
}