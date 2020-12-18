<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.list',compact('users','roles'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    public function store(CreateUser $request)
    {
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id  =$request->role;
        $user->save();
//        $user->role()->sync($request->roles);
        return redirect()->route('user.index');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(CreateUser $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id  =$request->role;
        $user->save();
//        $user->roles()->sync($request->roles);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
