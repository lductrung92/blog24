<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateGroup;
use App\Category;
use App\News;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() {
        $news = News::where('status', 1)->paginate(7);
    	
        $showbiz = DB::table('categories')
                            ->where('categories.alias', '=', 'showbiz')
                            ->join('news', 'news.category_id', '=', 'categories.id')
                            ->select('news.*', 'categories.alias as cate_alias', 'categories.name')
                            ->orderBy('news.created_at', 'DESC')
                            ->take(1)
                            ->get();

        $postNews = DB::table('cate_groups')
                            ->join('categories', 'cate_groups.id', '=', 'categories.cate_group_id')
                            ->join('news', 'news.category_id', '=', 'categories.id')
                            ->where('cate_groups.status', '=', 0)
                            ->select('news.*', 'categories.alias as cate_alias')
                            ->orderBy('news.created_at', 'DESC')
                            ->take(4)
                            ->get();

        return view('home.index', ['news' => $news, 'postNews' => $postNews,'showbiz' => $showbiz]);
      /* dd($showbiz);*/
    }

    public function getCate($aliasCate) {
        $cateID = Category::select('id')->where('alias', $aliasCate)->get();
        foreach ($cateID as $itemCate) {
            $newCates = News::where('category_id', $itemCate->id)->paginate(7);
        }

        return view('home.cate_detail', ['newCates' => $newCates]);

    }

    public function groupDetails($aliasG) {
        $groupCates = DB::table('cate_groups')
                            ->join('categories', 'cate_groups.id', '=', 'categories.cate_group_id')
                            ->join('news', 'news.category_id', '=', 'categories.id')
                            ->where('cate_groups.alias', '=', $aliasG)
                            ->select('news.*', 'categories.alias as cate_alias', 'cate_groups.name as cgname', 'categories.name as cname')
                            ->orderBy('news.created_at', 'DESC')
                            ->paginate(7);
        return view('home.cate_group_detail', ['groupCates' => $groupCates]);
    }

    public function details($aliasCate, $id) {
        $newDetail = News::where('id', $id)->get();
    	return view('home.detail', ['newDetail' => $newDetail]);
    }

    public function getSearch(Request $request) {
        $resultSearchs = News::where('title', 'like', '%' . $request->txtSearch . '%')/*->orWhere('name', 'like', '%' . Input::get('name') . '%')*/->paginate(7);
        return view('home.search',['resultSearchs' => $resultSearchs, 'keywords' => $request->txtSearch]);
        
    }
}
