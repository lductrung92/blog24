<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function getLogin() {
    	return view('admin.login');
    }

    public function postLogin(Request $request) {
    	if(Auth::attempt(['username' => $request->txtUsername, 'password' => $request->txtPassword])) {
    		return redirect('admin/dashboard');
    	}else {
    		return view('admin.login');
    	}
    }

    public function logout() {
    	Auth::logout();
    	return view('admin.login');
    }
}
