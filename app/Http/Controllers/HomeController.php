<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateGroup;
use App\Category;

class HomeController extends Controller
{
    public function home() {
    	$cateGNames = CateGroup::where('status', 0)->get();
        $cateGL = CateGroup::where('status', 1)->get();
    	return view('home.base.base', ['cateGNames' => $cateGNames, 'cateGL' => $cateGL]);
    }
}
