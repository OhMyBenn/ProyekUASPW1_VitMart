<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function do_login(Request $request)
    {
        // Contoh validasi sederhana, sesuaikan dengan kebutuhan
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // atau halaman setelah login
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->withInput();
    }

    // Tampilkan form register
    public function showRegister()
    {
        
        return view('auth.register');
    }

    // Proses register
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect("register")
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->save();

        return redirect('login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
