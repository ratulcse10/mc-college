<?php

class ContactController extends \BaseController {

	
	public function show()
	{
		return View::make('contact.index')
        	->with('title',"Contact")
        	->with('contact',Contact::find(1));
	}

	public function sendMail()
	{


		$rules = [
					'name' => 'required',
					'email' => 'required',
					'message' => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else{

			$email = $data['email'];
			$message = $data['message'];
			$name = $data['name'];

			$finalMessage= $message."\r\n".$name;

			$to = "ratulcse10@gmail.com";
			$subject = "Contact from Website";

			$headers = "From: ".$email;

			mail($to,$subject,$finalMessage,$headers);
			return Redirect::back()->with('success',"Email Sent Successfully");

		}

		
	}
	

}