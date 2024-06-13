<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function index ()
    {
        return view('admin.pages.auth.login');
    }

    public function login (Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password)
        ];

        $infologin = [
            'email'=> $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return  redirect('/dashboard')->with('success', 'Berhasil Login');
        } else {
            // return 'gagal masuk';
            return redirect('/sesi')->withErrors('Username dan Password yang dimasukkan Tidak Valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/sesi')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return view('admin.pages.auth.register');
    }

    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'Nama Tidak Boleh kosong',
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return  redirect('/dashboard')->with('success', 'Berhasil Register');
        } else {
            // return 'gagal Register';
            return redirect('/register')->withErrors('Username dan Password yang dimasukkan Tidak Valid');
        }
        return ('/sesi');
    }
}
