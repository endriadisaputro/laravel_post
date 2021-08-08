<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
    	return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
    	User::create($request->all());
    	return redirect('/')->with('success','Thank you, you are now registered!');
    }
}
