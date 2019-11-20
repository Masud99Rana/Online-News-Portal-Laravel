<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingPageController extends Controller
{
    public function index(){
    	return view('front.listing');
    }
}
