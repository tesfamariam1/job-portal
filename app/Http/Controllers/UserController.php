<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeekerRegistrationRequest;
use App\Models\User;

class UserController extends Controller
{
    const JOB_SEEKER = 'seeker';
    public function createSeeker()
    {
        return view('user.seeker-register');
    }
    public function storeSeeker(SeekerRegistrationRequest $seekerRegistrationRequest)
    {
        User::create([
            'name' => $seekerRegistrationRequest->name,
            'email' => $seekerRegistrationRequest->email,
            'password' => bcrypt($seekerRegistrationRequest->password),
            'user_type' => self::JOB_SEEKER,
        ]);

        return back();
    }
}
