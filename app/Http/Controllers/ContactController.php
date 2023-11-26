<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use DB;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
	
	public function createcontacts(Request $request)
	{
		$data = $request->input();
		$create_contact = Contact::create($data);
		//dd($create_contact);
		Session::flash('message', 'Submit Successfully!'); 
		return view('contact');
	}
	
	public function getDelete($id)
	{
		$Contact = Contact::find($id);
		$Contact->delete();
		Session::flash('message', 'Delete Successfully!'); 
		return redirect('/admin/contact');	
	}
}
