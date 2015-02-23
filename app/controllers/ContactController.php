<?php

class ContactController extends \BaseController {

	public function showForm() {
		return View::make('contact');
	}

	public function send() {
		if (! Request::ajax()) {
			return Redirect::action('ContactController@showForm');
		}

		$validator = Validator::make(Input::all(), ['name' => 'required', 'email' => 'required', 'message' => 'required']);

		if ($validator->fails()) {
			return Response::json($validator->errors(), 404);
		}

		$name = Input::get('name');
		$email = Input::get('email');
		$message_content = Input::get('message');

		Mail::send('emails.contact', compact('name', 'email', 'message_content'), function($message) use ($email) {
			$message->to('halostreamsdotcom@gmail.com');
			$message->from($email);
			$message->subject('Contact Form Submission');
		});
	}
}
