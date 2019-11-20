<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{	
	/**
	 * For show home page
	 * @return [type] [description]
	 */
    public function index(){
    	return view('front.home');
    }
}
