<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller{
	
	public function create(){
		return view('feedback-form');
	}
	
	public function send(Request $request){
		$validated = $request->validate([
			'full_name' => 'required|max:100',
			'email' => 'required|email',
			'comment' => 'required',
		]);
		
		Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
			->send(new Feedback($validated['full_name'], $validated['email'], $validated['comment']));
			
		return redirect('/feedback/success');
	}

	public function success(){
		return view('success');
	}
}	

?>