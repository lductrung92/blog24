<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getList() {
    	$users = User::all();
    	return view('admin.user.list', ['users' => $users]);
    }

    public function getInsert() {
    	return view('admin.user.insert');
    }

    public function postInsert(UserRequest $request) {
    	$user = new User;

    	$user->email = $request->txtEmail;
    	$user->username = $request->txtUsername;
    	$user->password = bcrypt($request->txtPassword);
    	

    	$user->save();

    	return redirect('admin/user/list')->with(["flash_level" => "success", "flash_message" => "Thêm thành công"]);
    }
    public function getUpdate($id) {
    	$cateG = CateGroup::find($id);
    	return view('admin.cate_group.update',['cateG' => $cateG]);
    }


    public function postUpdate(UserRequest $request, $id) {
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
