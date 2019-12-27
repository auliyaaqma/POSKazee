<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\User;

class FrontController extends Controller
{
    public function index(){
    	$data['products'] = Product::paginate(12);
    	return view('index', $data);
    }

    public function dashboard(){
    	$data['count_product'] = Product::all()->count();
    	$data['count_user'] = User::all()->count();
    
    	return view('dashboard', $data);
    }
}
