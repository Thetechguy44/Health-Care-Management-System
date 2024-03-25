<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Patient;
use App\Models\Speciality;
use Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class PatientEditProfile extends Component
{
    use WithFileUploads;
    public $tab = null;
    public $tabname = 'update_profile';
    protected $queryString = ['tab'];
    public $id, $avatar, $name, $lastname, $othername, $email, $about, $dob, $selectedGender, $genderOptions, $address, $city, $blood_group, $occupation, $lga, $state, $phone;
    public $current_password, $new_password, $new_password_confirmation;

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    public function mount()
    {
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        $profile = Auth::user();
        $this->id = $profile->id;
        $this->name = $profile->name;
        $this->email = $profile->email;
        $this->about = $profile->about;
        $this->avatar = $profile->avatar;
        $this->dob = $profile->dob;
        $this->genderOptions = ['male', 'female', 'other'];
        $this->selectedGender = $profile->gender;
        $this->address = $profile->address;
        $this->city = $profile->city;
        $this->blood_group = $profile->blood_group;
        $this->occupation = $profile->occupation;
        $this->lga = $profile->lga;
        $this->state = $profile->state;
        $this->phone = $profile->phone;
    }

    public function render()
    {
        return view('livewire.patient-edit-profile');
    }

    public function updateAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048|mimes:png,jpeg,jpg',
        ]);

        $user = Auth::user();

        if($this->avatar){
            // Delete the old avatar image if it exists
            $destination = 'storage/users-avatar/' . $user->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new avatar image
            $filename = time() . '.' . $this->avatar->getClientOriginalExtension();
            $this->avatar->storeAs('users-avatar', $filename, 'public');
        }

            // Update the user's avatar
            $user->avatar = $filename;
            $user->save();
            $this->reset('avatar');

            session()->flash('avatar', 'Avatar updated successfully.');
    }

    public function updateHealthproviderBasicInfo()
    {
        $this->validate([
            'name'=>'required|max:30',
            'email'=>'required|email|unique:users,email,'.$this->id,
            'about'=>'nullable',
            'dob'=>'nullable',
            'selectedGender'=>'required',
            'address'=>'nullable',
            'lga'=>'nullable',
            'city'=>'nullable',
            'blood_group'=>'nullable',
            'occupation'=>'nullable',
            'state'=>'nullable',
            'phone'=>'required|numeric',
        ]);

        User::find(Auth::user()->id)->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'about'=>$this->about,
            'dob'=>$this->dob,
            'gender'=>$this->selectedGender,
            'address'=>$this->address,
            'lga'=>$this->lga,
            'city'=>$this->city,
            'blood_group'=>$this->blood_group,
            'occupation'=>$this->occupation,
            'state'=>$this->state,
            'phone'=>$this->phone,
        ]);
        
        session()->flash('basicinfo','Your basic info has been updated successfully.');
    }

    public function updatePatientPassword()
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
}
