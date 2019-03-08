<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('category.list', compact('categories'));
    }
    public function edit($id)
    {
    	$categories = Category::findOrFail($id);
    	return view('category.edit', compact('categories'));
    }
    public function update(Request $request, $id)
    {
    	$categories = Category::findOrFail($id);
    	$categories->name = $request->input('name');
    	$categories->save();
    	return redirect()->route('category.list');  	
    }
    public function create()
    {
    	return view('category.create');
    }
    public function store(Request $request)
    {
    	$categories = new Category();
    	$categories->name = $request->input('name');
    	$categories->save();
    	Session::flash('success', 'Tạo mới danh mục');
    	return redirect()->route('category.list');
    }
    public function destroy($id)
    {
    	$categories = Category::findOrFail($id);
    	$categories->delete();
    	return redirect()->route('category.list');
    }
}
