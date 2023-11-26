<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
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
		$galleries = DB::select('select * from albums');	
		return view('gallery')->with('album',$galleries);
        //return view('gallery');
    }
}
