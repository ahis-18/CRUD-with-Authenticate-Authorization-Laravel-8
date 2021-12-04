<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);

        User::create($validatedata);

        /* $request->session()->flash('success', 'Registrasi berhasil!!! Silahkan Login :)'); */

        return redirect('/login')->with('success', 'Registrasi berhasil!!! Silahkan Login :)');
    }
}
