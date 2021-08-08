<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
    	return view('auth.login');
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'email'=>['required', 'email'],
    		'password'=>['required'],
    	]);

    	if(Auth::attempt($attributes)){
    		return redirect('/')->with('success','You are now Logged in');
    	}
    	throw ValidationException::withMessages([
    		'email'=>'Your provide credential does not match our record.',
    	]);
    }
}
