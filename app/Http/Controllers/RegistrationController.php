<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = new User;
        $user -> name = request('name');
        $user -> email = request('email');
        $user -> password = hash::make(request('password'));
        $user -> save();

        auth()->login($user);

        return redirect()->home();
    }
}
