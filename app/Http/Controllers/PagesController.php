<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function roomID($id){
		return view('pages.room.phong-ban-ID');
	}
	public function room(){
		return view('pages.room.phong-ban');
	}
	public function timeline(){
		return view('pages.timeline');
	}
	public function timelineID($id){
		return view('pages.timeline-id');
	}
	public function profile($id){
		return view('pages.profile');
	}
	public function calendar($id){
		return view('pages.calendar');
	}
	public function work($id){
		return view('pages.work');
	}
	public function addUser(){
		return view('pages.them-nhan-vien');
	}

}
