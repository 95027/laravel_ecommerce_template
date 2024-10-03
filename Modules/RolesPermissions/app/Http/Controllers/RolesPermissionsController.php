<?php

namespace Modules\RolesPermissions\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsController extends Controller
{

    public function roles()
    {

        $data['roles'] = Role::where('name', '!=', 'admin')->latest()->get();
        $data['permissions'] = Permission::latest()->get();

        return view('rolespermissions::roles', $data);
    }

    public function createRole(Request $request)
    {

        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'permissionIds' => 'required|array',
            'permissionIds.*' => 'exists:permissions,id',
        ]);

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'employee',
        ]);

        $permissions = Permission::whereIn('id', $request->permissionIds)->get();

        $role->syncPermissions($permissions->pluck('name')->toArray());


        notify()->success('Role created successfully');

        return redirect()->back();
    }

    public function destroyRole(Request $request, $id){

        $role = Role::findOrFail($id);

        if(!$role){
            notify()->error('Requested role not found');
            return redirect()->back();
        }
        $role->delete();
        notify()->success('Role deleted successfully...');
        return redirect()->back();

    }
}
