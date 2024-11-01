<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $roles = Role::paginate(10);
        
        if (!$user->hasAnyRole(['Administrator', 'Admin'])) {
            // Exclude the 'Administrator' and 'Admin' roles if the user is not an administrator
            $roles = $roles->filter(function ($role) {
                return !in_array($role->name, ['Administrator', 'Admin']);
            });
        }
        
        return view('dashboards.admin.settings.role.index', ['roles' => $roles]);
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
        $role = Role::create($request->except('permissions'));
        $role->syncPermissions($request->input('permissions'));
    
        return redirect()->route('admin.roles.index')->with('success','Role created successfully');
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
        $role = Role::findorFail($id);

        $role->update($request->except('permissions'));
        $role->syncPermissions($request->input('permissions'));
    
        return redirect()->route('admin.roles.index')
                        ->with('success','Role updated successfully');
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
