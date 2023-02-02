<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    /* Step One */

    public function createStepOne(Request $request)
    {
        $applicant = $request->session()->get('applicant');

        return view('pages.step_one', compact('applicant'));
    }

    public function postStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'bday' => 'required',
            'address' => 'required',
            'cred_email' => 'required',
            'cred_fb' => 'required',
            'cred_cp' => 'required|numeric',
        ]);
  
        if (empty($request->session()->get('applicant'))){
            $applicant = new Applicant();
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);

        } else {
            $applicant = $request->session()->get('applicant');
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
        }

        return redirect()->route('pages.step_two');
    }

    /* Step Two */

    public function createStepTwo(Request $request)
    {
        $applicant = $request->session()->get('applicant');

        return view('pages.step_two', compact('applicant'));
    }

    public function postStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'alias' => 'required',
            'reppin' => 'required',
            'division' => 'required',
        ]);

        $applicant = $request->session()->get('applicant');
        $applicant->fill($validatedData);
        $request->session()->put('applicant', $applicant);
  
        return redirect()->route('pages.step_three');
    }

    /* Step Three */

    public function createStepThree(Request $request)
    {
        $applicant = $request->session()->get('applicant');

        return view('pages.step_three', compact('applicant'));
    }

    public function postStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'lyric_song' => 'required',
            'lyric_battle' => 'required',
            'link_song' => 'required',
            'link_battle' => 'required',
            'link_others' => 'required',
        ]);

        $applicant = $request->session()->get('applicant');
        $applicant->fill($validatedData);
        $request->session()->put('applicant', $applicant);
  
        return redirect()->route('pages.step_four');
    }

    /* Step Four */

    public function createStepFour(Request $request)
    {
        $applicant = $request->session()->get('applicant');

        return view('pages.step_four', compact('applicant'));
    }

    public function postStepFour(Request $request)
    {
        $applicant = $request->session()->get('applicant');
        $applicant->save();
  
        $request->session()->forget('applicant');

        return redirect()->route('pages.index');
    }

}