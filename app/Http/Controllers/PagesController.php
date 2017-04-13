<?php

namespace App\Http\Controllers;

Use App\post;

class PagesController extends Controller {

	public function getIndex(){
		$posts = Post::orderBy('id', 'desc')->paginate(5);
		return view('pages.welcome')->withPosts($posts);
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