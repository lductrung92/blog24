<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Category;
use App\News;

class NewsController extends Controller
{
	public function getList() {
		$news = News::all();
		return view('admin.news.list', ['news' => $news]);
	}

	public function getInsert() {
		$cateName = Category::select('id', 'name')->get();
		return view('admin.news.insert',['cateName' => $cateName]);
	}

	public function postInsert(NewsRequest $request) {
		$news = new News;

		$news->parent_id = $request->selParent;
		$news->category_id = $request->selParent;
		$news->title = $request->txtTitle;
		$news->source = $request->txtSource;
		$news->description = $request->txtDes;
		$news->content = $request->txtContent;
		$news->alias = changeTitle($request->txtTitle);
		$news->keywords = $request->txtKeyWords;
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
		$cateName = Category::select('id', 'name')->get();
		$news = News::find($id);
		return view('admin.news.update',['cateName' => $cateName, 'news' => $news]);
	}


	public function postUpdate(NewsRequest $request, $id) {
		$news = News::find($id);

		$news->parent_id = $request->selParent;
		$news->category_id = $request->selParent;
		$news->title = $request->txtTitle;
		$news->source = $request->txtSource;
		$news->description = $request->txtDes;
		$news->content = $request->txtContent;
		$news->alias = changeTitle($request->txtTitle);
		$news->keywords = $request->txtKeyWords;
		if($request->hasFile('fImage'))
		{
			$news->image = moveFile($request, 'fImage', true, $news->image);
		}else{
			$news->image = "";
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
