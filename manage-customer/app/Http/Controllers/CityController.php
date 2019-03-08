<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index()
    {
    	$cities = City::all();
    	return view('cities.list', compact('cities'));
    }
    public function create()
    {
    	return view('cities.create');
    }
    public function store(Request $request)
    {
    	$cities = new City();
    	$cities->name = $request->input('name');
    	$cities->save();
    	Session::flash('success', 'Tạo mới khách hàng thành công');
    	return redirect()->route('cities.list');
    }
    public function edit($id)
    {
    	$cities = City::findOrFail($id);
    	return view('cities.edit', compact('cities'));
    }
    public function destroy($id)
    {
    	$cities = City::findOrFail($id);
    	$cities->delete();
    	Session::flash('success', 'Xóa thành công');
    	return redirect()->route('cities.list');
    }
}
