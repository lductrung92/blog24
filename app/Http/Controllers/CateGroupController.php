<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CateGroupRequest;
use App\CateGroup;

class CateGroupController extends Controller
{
    public function getList() {
    	$cateGs = CateGroup::all();
    	return view('admin.cate_group.list', ['cateGs' => $cateGs]);
    }

    public function getInsert() {
    	return view('admin.cate_group.insert');
    }

    public function postInsert(CateGroupRequest $request) {
    	$cateG = new CateGroup;

    	$cateG->name = $request->txtName;
    	$cateG->keywords = $request->txtKeyWords;
    	$cateG->description = $request->txtDes;
    	$cateG->alias = changeTitle($request->txtName);
        $cateG->status = $request->checkStatus == 'on' ? 1 : 0;

    	$cateG->save();

    	return redirect('admin/cate_group/list')->with(["flash_level" => "success", "flash_message" => "Thêm thành công"]);
    }
    public function getUpdate($id) {
    	$cateG = CateGroup::find($id);
    	return view('admin.cate_group.update',['cateG' => $cateG]);
    }


    public function postUpdate(CateGroupRequest $request, $id) {
    	$cateG = CateGroup::find($id);

    	$cateG->name = $request->txtName;
    	$cateG->keywords = $request->txtKeyWords;
    	$cateG->description = $request->txtDes;
    	$cateG->alias = changeTitle($request->txtName);
        $cateG->status = $request->checkStatus == 'on' ? 1 : 0;

    	$cateG->update();

    	return redirect('admin/cate_group/list')->with(["flash_level" => "success", "flash_message" => "Cập nhật thành công"]);
    }

    public function getDelete($id) {
    	$cateG = CateGroupController::find($id);

    	$cateG->delete();
    	return redirect('admin/cate_group/list')->with(["flash_level" => "success", "flash_message" => "Xóa thành công"]);
    }
}
