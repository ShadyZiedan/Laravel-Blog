<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		return view('pages.welcome');
	}

	public function getAbout(){
		$first = 'Shadi';
		$last = 'Ziedan';
		$fullname = $first . " " .$last;
		$email = 'ShadyZiedan@gmail.com';
		$data= [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}
}