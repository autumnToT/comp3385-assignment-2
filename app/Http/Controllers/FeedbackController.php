<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller{
	public function create(){
		return view('feedback-form');
	}
	public function send(Request $request){
		$validated = $request->validate([
			'full_name' => 'required|max:100',
			'email' => 'required|email',
			'message' => 'required',
		]);
		return redirect('/');
	}
}	
?>