<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){

        if(auth()->check()){
            return redirect('/admin/dashboard');
        }

        return response()
        ->view('admin.login')
        ->header('Cache-control', 'no-store', 'no-cache', 'must-revalidate', 'max-age-0');
    }

    public function login(Request $request){

        $loginFields = $request->validate([
            'l-email' => 'required|email',
             'l-password' => 'required'

        ],
        [
            'l-email.required' => 'Please enter an email',
            'l-email.email' => 'Please enter a valid email',
            'l-password' => 'Please enter a password'
        ]

    
    );



    if(auth()->attempt([
        'email' => $loginFields['l-email'],
        'password'=> $loginFields['l-password']

        ])){

            $request->session()->regenerate();

            return redirect('/admin/dashboard')
            ->with('success', 'Login sucessful');


        }
        return redirect('/')
        ->withInput($request->only('l-email'))
        ->withErrors(['loginError'=> 'These credentials do not match our records.']);
        return view('admin.login');

    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }

    public function dashboard(){

        $user = auth()->user();

        $firstname = $user->name;
        $email =$user->email;

        return view('admin.dashboard', ['firstname'=> $firstname, 'email'=>$email]);
    }
    public function forgotPassword(){
        
    }
}
