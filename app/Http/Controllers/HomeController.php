<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateGroup;
use App\Category;
use App\News;

class HomeController extends Controller
{
    public function home() {
        $news = News::where('status', 1)->paginate(2);
    	return view('home.index', ['news' => $news]);
    }

    public function getCate($cateID) {
    	$newCates = News::where('category_id', $cateID)->paginate(2);
    	return view('home.catedetail', ['newCates' => $newCates]);
    }

    public function details($cateID, $id) {
    	return view('home.detail');
    }
}
