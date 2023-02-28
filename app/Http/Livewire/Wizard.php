<?php
   
namespace App\Http\Livewire;
   
use Livewire\Component;
use App\Models\Applicant;
   
class Wizard extends Component
{
    public $currentStep = 1;
    public $first_name, $last_name, $bday, $address, $cred_email, $cred_fb, $cred_cp, $alias, $reppin, $division, $lyric_song, $lyric_battle, $link_song, $link_battle, $link_others;
    public $successMessage = '';
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'bday' => 'required|date|after:01/01/1960|before:01/01/2023',
            'address' => 'required|min:5|max:100',
            
            'cred_email' => 'required|email',
            'cred_fb' => 'required',
            'cred_cp' => 'required|numeric',
        ],
        [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'bday.required' => 'Birthday is required.',
            'address.required' => 'Address is required.',

            'cred_email.required' => 'E-mail Address is required.',
            'cred_fb.required' => 'Facebook Account is required.',
            'cred_cp.required' => 'Cellphone Number is required.',

            'bday.date' => 'Please enter a valid birthday.',
            'bday.before' => 'Birthday must be before January 1, 2023.',
            'bday.after' => 'Birthday must be after January 1, 1960.',

            'cred_email.email' => 'Please enter a valid e-mail address.',
            'cred_cp.numeric' => 'Please enter a valid cellphone number.',

            'first_name.max' => 'Must not be greater than 50 characters.',
            'first_name.min' => 'Must not be less than 2 characters.',

            'last_name.max' => 'Must not be greater than 50 characters.',
            'last_name.min' => 'Must not be less than 2 characters.',

            'address.max' => 'Must not be greater than 100 characters.',
            'address.min' => 'Must not be less than 5 characters.'
        ]);
  
        $this->currentStep = 2;
        $this->successMessage = '';
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'alias' => 'required|max:50',
            'reppin' => 'required|min:2|max:50',
            'division' => 'required|in:Metro Manila,Calabarzon,Central Luzon,Visayas,Mindanao',
        ],
        [
            'alias.required' => 'Alias is required.',
            'reppin.required' => 'Reppin/Affiliations is required.',
            'division.required' => 'Please select a division.',

            'alias.max' => 'Must not be greater than 50 characters.',
            'reppin.max' => 'Must not be greater than 50 characters.',
            'reppin.min' => 'Must not be less than 2 characters.'
        ]);
   
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'lyric_song' => 'required|min:100|max:2000',
            'lyric_battle' => 'required|min:100|max:2000',
            'link_song' => 'required|min:10|max:100',
            'link_battle' => 'required|min:10|max:100',
            'link_others' => 'required|min:10|max:200',
        ],
        [
            'lyric_song.required' => 'Please enter 16 Bars for Song.',
            'lyric_battle.required' => 'Please enter 16 Bars for Battle.',
            'link_song.required' => 'Link for song is required.',
            'link_battle.required' => 'Link for battle is required.',
            'link_others.required' => 'Links for past music and battles is required.',

            'lyric_song.min' => 'Must not be less than 100 characters.',
            'lyric_song.max' => 'Must not be greater than 2000 characters.',

            'lyric_battle.min' => 'Must not be less than 100 characters.',
            'lyric_battle.max' => 'Must not be greater than 2000 characters.',

            'link_song.min' => 'Must not be less than 10 characters.',
            'link_song.max' => 'Must not be greater than 100 characters.',

            'link_battle.min' => 'Must not be less than 10 characters.',
            'link_battle.max' => 'Must not be greater than 100 characters.',

            'link_others.min' => 'Must not be less than 10 characters.',
            'link_others.max' => 'Must not be greater than 200 characters.'
            
        ]);
   
        $this->currentStep = 4;
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Applicant::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'bday' => $this->bday,
            'address' => $this->address,
            'cred_email' => $this->cred_email,
            'cred_fb' => $this->cred_fb,
            'cred_cp' => $this->cred_cp,

            'alias' => $this->alias,
            'reppin' => $this->reppin,
            'division' => $this->division,

            'lyric_song' => $this->lyric_song,
            'lyric_battle' => $this->lyric_battle,
            'link_song' => $this->link_song,
            'link_battle' => $this->link_battle,
            'link_others' => $this->link_others,
        ]);
   
        $this->successMessage = 'Success! Your entry has been submitted. Please wait for further announcements on our official social media pages regarding the tryouts. #FlipTop2023';
   
        $this->clearForm();
   
        $this->currentStep = 1;
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->bday = '';
        $this->address = '';
        $this->cred_email = '';
        $this->cred_fb = '';
        $this->cred_cp = '';

        $this->alias = '';
        $this->reppin = '';
        $this->division = '';

        $this->lyric_song = '';
        $this->lyric_battle = '';
        $this->link_song = '';
        $this->link_battle = '';
        $this->link_others = '';
    }
}
