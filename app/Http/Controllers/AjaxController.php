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
    $news = News::where('category_id', $id)->skip(0)->take(4)->get();
    $i = 1;
    foreach ($news as $item) {
      if($i <= 3) {
           echo "<div class='td-mega-span'><div class='td_module_mega_menu td_mod_mega_menu'><div class='td-module-image'><div class='td-module-thumb'><a href='". $item->category->alias ."/". $item->id ."/". $item->alias .".html'><img width='218' height='150' class='entry-thumb' src='upload/news/". $item->image ."' sizes='(max-width: 218px) 100vw, 218px'></a><a href='". $item->category->alias ."' class=td-post-category >". $item->category->name ."</a></div><div class='item-details'><h3 class='entry-title td-module-title'><a href='". $item->category->alias ."/". $item->id ."/". $item->alias .".html'>". $item->title ."</a></h3></div></div></div></div>";
           $i++;
      } else {
           echo "<div class='td-mega-span'><div class='td_module_mega_menu td_mod_mega_menu'><div class='td-module-image'><div class='td-module-thumb'><a href='". $item->category->alias ."/". $item->id ."/". $item->alias .".html'><img width='218' height='150' class='entry-thumb' src='upload/news/". $item->image ."' sizes='(max-width: 218px) 100vw, 218px'></a><a href='". $item->category->alias ."' class=td-post-category >". $item->category->name ."</a></div><div class='item-details'><h3 class='entry-title td-module-title'><a href='". $item->category->alias ."/". $item->id ."/". $item->alias .".html'>". $item->title ."</a></h3></div></div></div></div>";
           echo " <div class='td-next-prev-wrap'><a href='". $item->category->alias ."' class='td-ajax-next-page' id='next'><i id='next' class='td-icon-font td-icon-menu-right'></i></a></div>";
           $i++;
    }
    }

}
}
