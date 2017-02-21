<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;

use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getList() {
    	$cates = Category::all();
    	return view('admin.category.list', ['cates' => $cates]);
    }

    public function getInsert() {
    	$cateName = Category::select('id', 'name')->get();
    	return view('admin.category.insert',['cateName' => $cateName]);
    }

    public function postInsert(CategoryRequest $request) {
    	$cate = new Category;

    	$cate->parent_id = $request->selParent;
    	$cate->name = $request->txtName;
    	$cate->keywords = $request->txtKeyWords;
    	$cate->description = $request->txtDes;
    	$cate->alias = changeTitle($request->txtName);

    	$cate->save();

    	return redirect('admin/category/list')->with(["flash_level" => "success", "flash_message" => "Thêm thành công"]);
    }
    public function getUpdate($id) {
    	$cateName = Category::select('id', 'name')->get();
    	$cate = Category::find($id);
    	return view('admin.category.update',['cateName' => $cateName, 'cate' => $cate]);
    }


    public function postUpdate(CategoryRequest $request, $id) {
    	$cate = Category::find($id);

    	$cate->parent_id = $request->selParent;
    	$cate->name = $request->txtName;
    	$cate->keywords = $request->txtKeyWords;
    	$cate->description = $request->txtDes;
    	$cate->alias = changeTitle($request->txtName);

    	$cate->update();

    	return redirect('admin/category/list')->with(["flash_level" => "success", "flash_message" => "Cập nhật thành công"]);
    }

    public function getDelete($id) {
    	$cate = Category::find($id);

    	$cate->delete();
    	return redirect('admin/category/list')->with(["flash_level" => "success", "flash_message" => "Xóa thành công"]);
    }

}
