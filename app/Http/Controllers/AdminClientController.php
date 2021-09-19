<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class AdminClientController extends Controller
{
    public function index()
    {
        $listUser = User::all();
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
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('login')
            ->with('success', 'Đăng kí thành công');
    }

    public function posLogin(Request $request) {
            $arr = [
                'username' => $request->username,
                'password' => $request->password
            ];

            if( Auth::attempt($arr)) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect()->route('index');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                return back()->with('error-login', 'Tài khoản hoặc mật khẩu không hợp lệ. Vui lòng kiểm tra và thử lại.');
            }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function storeAdmin(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect('/admin/list-user');
    }

    public function update(Request $request, $id)
    {
        $obj = User::find($id);
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
        $obj = User::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        return view('admin.edit', ['obj' => $obj]);
    }

    public function destroy($id)
    {
        $obj = User::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->delete();
        return redirect('/admin/list-user');
    }
}
