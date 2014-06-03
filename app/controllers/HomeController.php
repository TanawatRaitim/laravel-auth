<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	/*
	public function showWelcome()
	{
		return View::make('hello');
	}
	*/
	
	public function home(){
		//home.blade.php
		
		//select username find by id
		//$user = User::find(1)->username;
		
		
		//views/emails/auth/test.blade.php (content for sending mail)
		//array('name'=>'Big') (data pass to view)
		
		/*
		Mail::send('emails.auth.test', array('name'=>'Big'),function($message){
			$message->to('tanardroid@gmail.com','Tanawat Raitim')->subject('Test Email');
		});
		 * 
		 * 
		 */		//views/emails/auth/test.blade.php
		
		return View::make('home');
	}
	
}