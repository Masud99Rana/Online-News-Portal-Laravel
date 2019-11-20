<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        // $page_name = 'Categories';
        // $data = Category::all();
        // return view('admin.category.list',compact('page_name','data'));
        return view('admin.category.list');
    }

    public function create()
    {
        $page_name = 'Category Create';
        return view('admin.category.create',compact('page_name'));
    }

    public function edit()
    {
        $page_name = 'Category Edit';
        return view('admin.category.edit',compact('page_name'));
    }
}
