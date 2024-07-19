<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboards.admin.settings.role.index', ['roles' => Role::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admin.settings.role.create', ['permissions' => Permission::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->input('name'),
            'guard_name' => 'admin' // specify the guard name here
        ]);
        $role->syncPermissions($request->input('permissions'));
        
        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('dashboards.admin.settings.role.edit',compact('role','permissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fetch the role with the admin guard
        $role = Role::where('id', $id)->where('guard_name', 'admin')->firstOrFail();
    
        // Update the role attributes, ensuring guard_name is 'admin'
        $role->update($request->except(['permissions', 'guard_name']));
        $role->guard_name = 'admin';
        $role->save();
    
        // Synchronize the permissions
        $role->syncPermissions($request->input('permissions'));
    
        return redirect()->route('admin.roles.index')
                        ->with('success', 'Role updated successfully');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::destroy($id);
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted successfully');
    }
}
