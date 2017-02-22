<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\CateGroup;
use App\Category;
use App\News;

class NewsController extends Controller
{
	public function getList() {
		$news = News::all();
		return view('admin.news.list', ['news' => $news]);
	}

	public function getInsert() {
		$cateGs = CateGroup::all(); 
		$cates = Category::all();
		return view('admin.news.insert',['cateGs' => $cateGs, 'cates' => $cates]);
	}

	public function postInsert(NewsRequest $request) {
		$news = new News;

		$news->category_id = $request->selParent;
		$news->title = $request->txtTitle;
		$news->source = $request->txtSource;
		$news->description = $request->txtDes;
		$news->content = $request->txtContent;
		$news->alias = changeTitle($request->txtTitle);
		
		if($request->hasFile('fImage'))
		{
			$news->image = moveFile($request, 'fImage', false, null);
		}else{
			$news->image = "";
		}
		$news->save();

		return redirect('admin/news/list')->with(["flash_level" => "success", "flash_message" => "Thêm thành công"]);
	}
	public function getUpdate($id) {
		$cateGs = CateGroup::all(); 
		$cates = Category::all();
		$news = News::find($id);
		return view('admin.news.update',['cateGs' => $cateGs, 'cates' => $cates, 'news' => $news]);
	}


	public function postUpdate(NewsRequest $request, $id) {
		$news = News::find($id);

		$news->category_id = $request->selParent;
		$news->title = $request->txtTitle;
		$news->source = $request->txtSource;
		$news->description = $request->txtDes;
		$news->content = $request->txtContent;
		$news->alias = changeTitle($request->txtTitle);
		
		if($request->hasFile('fImage'))
		{
			$news->image = moveFile($request, 'fImage', true, $news->image);
		}else{
			$news->image = $news->image;
		}
		$news->update();

		return redirect('admin/news/list')->with(["flash_level" => "success", "flash_message" => "Cập nhật thành công"]);
	}

	public function getDelete($id) {
		$news = News::find($id);
		unlink("upload/news/" . $news->image);
		$news->delete();
		return redirect('admin/news/list')->with(["flash_level" => "success", "flash_message" => "Xóa thành công"]);
	}
}
