<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class AdminEditProfile extends Component
{
    public $id, $avatar, $name, $email, $dob, $selectedGender, $genderOptions, $address, $city, $lga, $state, $phone, $school, $course, $qualification, $facebook_url, $instagram_url, $twitter_url, $linkedin_url;
    
    public $current_password, $new_password, $new_password_confirmation;
    
    use WithFileUploads;
    
    public function mount()
    {
        $this->profile = Auth::user();
        $this->id = $this->profile->id;
        $this->name = $this->profile->name;
        $this->email = $this->profile->email;
        $this->avatar = $this->profile->avatar;
        $this->dob = $this->profile->dob;
        $this->genderOptions = ['male', 'female', 'other'];
        $this->selectedGender = $this->profile->gender;
        $this->address = $this->profile->address;
        $this->city = $this->profile->city;
        $this->lga = $this->profile->lga;
        $this->state = $this->profile->state;
        $this->phone = $this->profile->phone;
        $this->school = $this->profile->school;
        $this->qualification = $this->profile->qualification;
        $this->facebook_url = $this->profile->facebook_url;
        $this->instagram_url = $this->profile->instagram_url;
        $this->twitter_url = $this->profile->twitter_url;
        $this->linkedin_url = $this->profile->linkedin_url;
    }

    public function updateAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048|mimes:png,jpeg,jpg',
        ]);

        $user = Auth::user();

        if($this->avatar){
            // Delete the old avatar image if it exists
            $destination = 'default/users/img/' . $user->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new avatar image
            $filename = time() . '.' . $this->avatar->getClientOriginalExtension();
            $this->avatar->storeAs('avatars', $filename, 'public');
        }

            // Update the user's avatar
            $user->avatar = $filename;
            $user->save();
            $this->reset('avatar');

            session()->flash('avatar', 'Avatar updated successfully.');

    }

    public function updateAdminBasicInfo()
    {
        $this->validate([
            'name'=>'required|max:30',
            'email'=>'required|email|unique:users,email,'.$this->id,
            'dob'=>'nullable',
            'selectedGender'=>'required',
            'address'=>'nullable',
            'lga'=>'nullable',
            'city'=>'nullable',
            'state'=>'nullable',
            'phone'=>'required|numeric',
        ]);

        User::find(Auth::user()->id)->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'dob'=>$this->dob,
            'gender'=>$this->selectedGender,
            'address'=>$this->address,
            'lga'=>$this->lga,
            'city'=>$this->city,
            'state'=>$this->state,
            'phone'=>$this->phone,
        ]);
        
        session()->flash('basicinfo','Your basic info has been updated successfully.');
    }

    public function updateAdminEducation()
    {
        $this->validate([
            'school'=>'required',
            'course'=>'required',
            'qualification'=>'required',
        ]);

       User::find($this->id)->update([
            'school'=>$this->school,
            'course'=>$this->course,
            'qualification'=>$this->qualification,
        ]);

        session()->flash('eduinfo','Your education info has been updated successfully.');
    }

    public function updateSocialInfo()
    {
        $this->validate([
            'facebook_url'=>'nullable|url',
            'instagram_url'=>'nullable|url',
            'twitter_url'=>'nullable|url',
            'linkedin_url'=>'nullable|url',
        ]);

        User::find($this->id)->update([
            'facebook_url'=>$this->facebook_url,
            'instagram_url'=>$this->instagram_url,
            'twitter_url'=>$this->twitter_url,
            'linkedin_url'=>$this->linkedin_url,
        ]);

        session()->flash('socialinfo','Your Social Media infomation has been updated successfully.');
    }

    public function updateAdminPassword()
    {
        $this->validate([
            'current_password'=>[
                'required', function($attribute, $value, $fail){
                    if(!Hash::check($value, Auth::user()->password)){
                        return $fail(_('The current password is incorrect'));
                    }
                }
            ],
            'new_password'=>'required|min:8|max:16|confirmed'
        ]);
        
        $query = User::find($this->id)->update([
            'password'=>Hash::make($this->new_password)
        ]);

        if($query){
            $this->current_password = $this->new_password = $this->new_password_confirmation = null;
            session()->flash('passwordsuccess','Password successfully changed.');
        }else{
            session()->flash('passworderror','something went wrong');
        }
    }

    public function showToastr($type, $message)
    {
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=>$type,
            'message'=>$message,
        ]);
    }

    public function render()
    {
        return view('livewire.admin-edit-profile');
    }
}
