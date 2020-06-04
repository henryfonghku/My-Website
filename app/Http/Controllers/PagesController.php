<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
	
	public function index()
	{
		return view('pages.home');
	}

	public function basic()
	{
		return view('pages.basic');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function photo()
	{
		return view('pages.photo');
	}

	public function video()
	{
		return view('pages.video');
	}

	public function message()
	{
		return view('pages.message');
	}

}
