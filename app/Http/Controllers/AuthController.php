<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    public function auth(){
        return view('auth');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Notification::send($user, new VerifyEmail());

            return redirect()->route('auth')->with('success','Berhasil Mendaftar! Silahkan mengecek email untuk verifikasi akun kamu!');
        }catch (\Exception $e) {
            return redirect()->route('auth')->with('error', 'Gagal Mendaftar!' . $e);
        }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        if (Auth::attempt($request->only('email','password'))) {
            if (Auth::user()->email_verified_at){
                $request->session()->regenerate();
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('admin')->with('success','Selamat Datang Admin!');
                }else{
                    return redirect()->route('user')->with('success','Kamu berhasil Masuk!');
                }
            }else {
                Auth::logout();
                return back()->with('error','Harap Verifikasi akun kamu!');
            }
        }

        return redirect()->route('auth')->with('error','Kombinasi email dan password salah!');
    }

    public function verify($id, $hash)
{
    $user = User::findOrFail($id);

    if (sha1($user->getEmailForVerification()) !== $hash) {
        return redirect()->route('auth')->with('error', 'Link verifikasi tidak valid!');
    }

    if ($user->hasVerifiedEmail()) {
        return redirect()->route('auth')->with('success', 'Akun anda sudah terverifikasi');
    }

    if ($user->markEmailAsVerified()) {
        return redirect()->route('auth')->with('success', 'Akun anda berhasil diverifikasi!');
    }

    return redirect()->route('auth')->with('error', 'Gagal verifikasi email!');
}

public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}

}
