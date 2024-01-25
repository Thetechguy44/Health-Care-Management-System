<?php

namespace App\Livewire\Healthcare;

use Livewire\Component;
use App\Models\User;
use App\Models\HealthProvider;
use App\Models\Speciality;
use Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditProfile extends Component
{
    use WithFileUploads;
    public $tab = null;
    public $tabname = 'my_info';
    protected $queryString = ['tab'];
    public $selectedSpeciality;
    
    public $id, $avatar, $name, $email, $about, $dob, $selectedGender, $genderOptions, $nurseOptions, $specialities, $address, $city, $lga, $state, $phone, $school, $course, $qualification, $facebook_url, $instagram_url, $twitter_url, $linkedin_url;
    public $employment_status, $place_of_work, $job_position, $reference;
    public $license_no, $license_img, $nin_no;
    public $nurse_category, $speciality, $available_days, $available_times;
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
        $this->avatar = $profile->avatar;
        $this->dob = $profile->dob;
        $this->genderOptions = ['male', 'female', 'other'];
        $this->selectedGender = $profile->gender;
        $this->address = $profile->address;
        $this->city = $profile->city;
        $this->lga = $profile->lga;
        $this->state = $profile->state;
        $this->phone = $profile->phone;
        $this->school = $profile->school;
        $this->course = $profile->course_of_study;
        $this->qualification = $profile->qualification;
        $this->employment_status = $profile->employment_status;
        $this->place_of_work = $profile->place_of_work;
        $this->job_position = $profile->job_position;
        $this->reference = $profile->reference;
        $this->license_no = $profile->license_no;
        $this->license_img = $profile->license_img;
        $this->nin_no = $profile->nin_no;
        $this->facebook_url = $profile->facebook_url;
        $this->instagram_url = $profile->instagram_url;
        $this->twitter_url = $profile->twitter_url;
        $this->linkedin_url = $profile->linkedin_url;

        $this->nurseOptions = ['Speciality Nurse', 'General Nurse', 'Community Nurse'];
        $this->specialities = Speciality::all();

        $this->speciality = auth()->user()->healthProvider->speciality_id ?? null;

        $healthProvider = HealthProvider::where('user_id', auth()->id())->first();
        if ($healthProvider) {
            $this->available_days = $healthProvider->available_days;
            $this->available_times = $healthProvider->available_times;
            $this->nurse_category = $healthProvider->nurse_category;
        }

    }

    public function render()
    {
        return view('livewire.healthcare.edit-profile');
    }

    public function updateAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048|mimes:png,jpeg,jpg',
        ]);

        $user = Auth::user();

        if($this->avatar){
            // Delete the old avatar image if it exists
            $destination = 'storage/avatars/' . $user->avatar;
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
            'state'=>$this->state,
            'phone'=>$this->phone,
        ]);
        
        session()->flash('basicinfo','Your basic info has been updated successfully.');
    }

    public function updateHealthproviderEducation()
    {
        $validatedData = $this->validate([
            'school' => 'required',
            'course' => 'required',
            'qualification' => 'required',
        ]);

        // dd($validatedData);

       User::find($this->id)->update([
            'school'=>$this->school,
            'course_of_study'=>$this->course,
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

    public function updateWorkExperience()
    {
        $validatedData = $this->validate([
            'employment_status'=>'required',
            'place_of_work'=>'required',
            'job_position'=>'required',
            'reference'=>'required',
        ]);

        //dd($validatedData);

        User::find($this->id)->update([
            'employment_status'=>$this->employment_status,
            'place_of_work'=>$this->place_of_work,
            'job_position'=>$this->job_position,
            'reference'=>$this->reference,
        ]);

        session()->flash('workexperience','Your Social Media infomation has been updated successfully.');
    }

    public function updateSpeciality()
    {
        $this->validate([
            'speciality'=>'required',
            'available_days'=>'required',
            'available_times'=>'required',
        ]);

        $healthProvider = HealthProvider::where('user_id', $this->id)->first();

        if ($healthProvider) {
            $healthProvider->update([
                'speciality_id' => $this->speciality,
                'available_days' => $this->available_days,
                'available_times' => $this->available_times,
            ]);

            session()->flash('category', 'Specialization has been saved successfully.');
        }
    }

    public function updatedNurseCategory()
    {
        $this->selectedSpeciality = null;
    }

    public function updateNurseCategory()
    {
        $validatedData = $this->validate([
            'nurse_category'=>'required',
            'available_days'=>'required',
            'available_times'=>'required',
        ]);

        // dd($validatedData);

        $healthProvider = HealthProvider::where('user_id', $this->id)->first();

        $healthProvider->update([
            'nurse_category' => $this->nurse_category,
            'speciality_id' => $this->speciality,
            'available_days' => $this->available_days,
            'available_times' => $this->available_times,
        ]);

        session()->flash('category', 'Specialization has been saved successfully.');

    }

    public function updateWorkingPreference()
    {
        $this->validate([
            'available_days'=>'required',
            'available_times'=>'required',
        ]);

        $healthProvider = HealthProvider::where('user_id', $this->id)->first();

        $healthProvider->update([
            'available_days'=>$this->available_days,
            'available_times'=>$this->available_times,
        ]);

        session()->flash('workings','Your working preference have been saved.');
    }

    public function VerificationUpdate()
    {
        $this->validate([
            'license_no'=>'required',
            'license_img'=>'required|image|max:2048|mimes:png,jpeg,jpg',
            'nin_no'=>'required|min:11|max:11',
        ]);

        $user = User::find($this->id);

        if ($this->license_img) {
            // Store the new license image
            $filename = time() . '.' . $this->license_img->getClientOriginalExtension();
            $this->license_img->storeAs('documents', $filename, 'public');
    
            // Update the user's license_img field
            $user->update(['license_img' => $filename]);
        }
    
        // Update other fields in the user model
        $user->update([
            'license_no' => $this->license_no,
            'nin_no' => $this->nin_no,
        ]);

        session()->flash('verification','Thank you for submitting your details, your profile is under review');
    }

    public function updateHealthcarePassword()
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
