<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    public function index()
    {
        $listUser = Admin::all();
        return view('admin.list-user', ['list' => $listUser]);
    }

    public function register()
    {
        return view('home.form-register');
    }
    public function create()
    {
        return view('admin.admin');
    }
    public function login()
    {
        return view('home.form-login');
    }
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->fullName = $request->get('fullName');
        $admin->phone = $request->get('phone');
        $admin->email = $request->get('email');
        $admin->address = $request->get('address');
        $admin->username = $request->get('username');
        $admin->password = $request->get('password');
        $admin->permission = $request->get('permission');
        $admin->status = $request->get('status');
        $admin->save();
        return redirect('home/login');
    }
    public function storeAdmin(Request $request)
    {
        $admin = new Admin();
        $admin->fullName = $request->get('fullName');
        $admin->phone = $request->get('phone');
        $admin->email = $request->get('email');
        $admin->address = $request->get('address');
        $admin->username = $request->get('username');
        $admin->password = $request->get('password');
        $admin->permission = $request->get('permission');
        $admin->status = $request->get('status');
        $admin->save();
        return redirect('/admin/list-user');
    }

    public function update(Request $request, $id)
    {
        $obj = Admin::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->fullName = $request->get('fullName');
        $obj->phone = $request->get('phone');
        $obj->email = $request->get('email');
        $obj->address = $request->get('address');
        $obj->username = $request->get('username');
        $obj->password = $request->get('password');
        $obj->permission = $request->get('permission');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/admin/list-user');
    }

    public function edit($id)
    {
        //
        $obj = Admin::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        return view('admin.edit', ['obj' => $obj]);
    }

    public function destroy($id)
    {
        $obj = Admin::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->delete();
        return redirect('/admin/list-user');
    }
}
