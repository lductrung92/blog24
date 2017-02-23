<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateGroup;
use App\Category;
use App\News;

class HomeController extends Controller
{
    public function home() {
        $news = News::where('status', 1)->paginate(9);
    	return view('home.index', ['news' => $news]);
    }

    public function getCate($aliasCate) {
        $cateID = Category::select('id')->where('alias', $aliasCate)->get();
        foreach ($cateID as $itemCate) {
            $newCates = News::where('category_id', $itemCate->id)->paginate(9);
        }

        return view('home.cate_detail', ['newCates' => $newCates]);

    }

    public function details($aliasCate, $id) {
        $newDetail = News::where('id', $id)->get();
    	return view('home.detail', ['newDetail' => $newDetail]);
    }
}
