<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("login");
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin) and Auth::user()->role == '1') {
            //Jika autentikasi sukses
            return redirect('/home-admin');
        } elseif (Auth::attempt($infologin) and Auth::user()->role == '0') {
            return redirect('/homepage');
        } else {
            //jika autentikasi gagal
            //return 'gagal';
            return redirect('/')->with('message', 'The email and password entered are invalid ');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function register()
    {
        return view('register');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Please use valid email',
                'email.unique' => "Email already exist, please use other email",
                'password.required' => 'Password is required',
                'password.min' => "Minimum password is 6 characters"
            ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            //Jika autentikasi sukses
            return redirect('/homepage');
        } else {
            //jika autentikasi gagal
            //return 'gagal';
            return redirect('/')->withErrors('The email and password entered are invalid ');
        }
    }

}