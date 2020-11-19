<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        return view('admin.users.index', ['users' => $users]);
    }

    public function changeRole($id)
    {
        $user = User::find($id);
        if($user->is_admin){
            $user->is_admin = false;
        }
        else {
            $user->is_admin = true;
        }
        $user->save();
        return redirect()->route('admin_all_users');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin_all_users');
    }

}
