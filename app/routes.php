<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'StreamController@featured');
Route::resource('streams', 'StreamController', ['only' => ['index', 'show']]);

Route::get('contactus', 'ContactController@showForm');
Route::post('contactus', 'ContactController@send');

Route::get('test', function() {
	Mail::send('emails.test', [], function($message) {
		$message->to('dlcrush@mail.roanoke.edu');
		$message->from('noreply@halostreams.com');
		$message->subject('Test');
	});
});
