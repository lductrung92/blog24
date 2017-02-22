<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function selCate($id) {
    	if($id ==0) {
    		echo "<option value='0'>Chọn loại tin</option>";
    	} else {
    		$cateNames = Category::where('cate_group_id', $id)->get();
	    	foreach ($cateNames as $cateName) {
	    		echo "<option value='". $cateName->id ."'>". $cateName->name ."</option>";
	    	}
    	}
    }

    public function getNew($id) {
        $news = News::where('category_id', $id)->get();
        foreach ($news as $item) {
           echo "<div class='td-mega-span'><div class='td_module_mega_menu td_mod_mega_menu'><div class='td-module-image'><div class='td-module-thumb'><a href='#'><img width='218' height='150' class='entry-thumb' src='upload/news/". $item->image ."' sizes='(max-width: 218px) 100vw, 218px'></a></div><div class='item-details'><h3 class='entry-title td-module-title'><a href='#' rel='bookmark'>". $item->title ."</a></h3></div></div></div></div>";
        }
        
    }
}
