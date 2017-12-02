<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
    
        $form->persist();

        session()->flash('message', 'Thanks so much for signing up!');
    	// redirect to the home page.
    	return redirect()->home();
    }
}
