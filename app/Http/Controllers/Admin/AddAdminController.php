<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AddAdminController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin-list|admin-create|admin-edit|admin-delete', ['only' => ['index','store']]);
         $this->middleware('permission:admin-create', ['only' => ['create','store']]);
         $this->middleware('permission:admin-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:admin-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::with('user.roles')->get();
        return view('dashboards.admin.admins.index', [
            'admins' => Admin::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admin.admins.create', ['roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'phone' => 'required|numeric',
        //     'role' => 'required',
        // ]);
    
        // Create the user
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'user_type' => 'admin',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone']
        ]);
    
        // Create the admin entry with the user ID
        Admin::create([
            'user_id' => $user->id,
        ]);
    
        // Assign the role to the admin
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('admin.admins.index')->with('success', 'New Admin added successfully');
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
        return view('dashboards.admin.admins.edit', [
            'roles' => Role::all(),
            'admin' => Admin::with('user.roles')->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique('users')->ignore($id),
        //     ],
        //     'phone' => 'required|numeric',
        //     'role' => 'required',
        // ]);
    
        // Retrieve the admin
        $admin = Admin::findOrFail($id);
    
        // Update the user
        $user = $admin->user;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
    
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        // Update the role
        $user->syncRoles($request->input('roles'));
    
        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findorFail($id)->delete();
        return redirect()->route('admin.admins.index')->with('success', 'Admin Deleted Successfully.');
    }
}
