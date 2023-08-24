<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'userrole' => 'customer', // Provide the desired user role
        ]);

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}