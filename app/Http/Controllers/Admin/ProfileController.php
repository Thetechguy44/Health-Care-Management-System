<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Auth::user();
        return view('dashboards.admin.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $profile = Auth::user();
        return view('dashboards.admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'name'=>'required|max:30',
        //     'email'=>'required|email|unique:users,email,'.$id,
        //     'dob'=>'nullable',
        //     'gender'=>'required',
        // ]);

        // $admin = User::find(Auth::user()->id);
        // $admin->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'dob' => $request->dob,
        //     'gender' => $request->gender,
        // ]);


        // return redirect()->back()->with('success', 'Your basic info has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function updateAvatar()
    // {
    //     $request->validate([
    //         'image' => 'required|image|max:2048',
    //     ]);
    
    //     $image = $request->file('image');
    //     $filename = time() . '.' . $image->getClientOriginalExtension();
    //     $croppedImage = Image::make($image)->resize(300, 300, function ($constraint) {
    //         $constraint->aspectRatio();
    //     })->save(public_path('uploads/' . $filename));
    
    //     return response()->json(['status' => 'success', 'filename' => $filename]);
    // }

    // public function updateAdminPassword()
    // {
    //     $this->validate([
    //         'current_password'=>[
    //             'required', function($attribute, $value, $fail){
    //                 if(!Hash::check($value, Auth::user()->password)){
    //                     return $fail(_('The current password is incorrect'));
    //                 }
    //             }
    //         ],
    //         'new_password'=>'required|min:8|max:16|confirmed'
    //     ]);
        
    //     $query = User::find($this->id)->update([
    //         'password'=>Hash::make($this->new_password)
    //     ]);

    //     if($query){
    //         $this->current_password = $this->new_password = $this->new_password_confirmation = null;
    //         return back()->with('success','Password successfully change');
    //     }else{
    //         return back()->with('error','something went wrong');
    //     }
    // }
}
