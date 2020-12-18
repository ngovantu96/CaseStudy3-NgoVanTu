<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRole;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.list',compact('roles'));
    }


    public function create()
    {
        //
    }


    public function store(CreateRole $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.list');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $roles = Role::all();
        return view('admin.roles.list',compact('role','roles'));
    }


    public function update(CreateRole $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
//        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('role.list');
    }

    public function destroy($id)
    {
        Role::where('id',$id)->delete();
        return redirect()->route('role.list');
    }
}
