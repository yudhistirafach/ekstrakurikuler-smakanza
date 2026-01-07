<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Auth;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(AuthRequest $request)
    {
        try {
            $remember = $request->has('remember-me');
            $credentials = $request->only('email', 'password');

            $user = Auth::attempt($credentials, $remember);

            if (!$user) {
                return back()
                    ->withInput()
                    ->with('alert', [
                        'type' => 'error',
                        'title' => 'Login Gagal',
                        'message' => 'Password dan email yang Anda masukkan salah.',
                    ]);
            }

            $request->session()->regenerate();

            return redirect()->route('home')->with('alert', [
                'type' => 'success',
                'title' => 'Login Berhasil',
                'message' => 'Selamat datang kembali!',
            ]);
        } catch (Exception $ex) {
            return back()
                ->withInput()
                ->with('alert', [
                    'type' => 'error',
                    'title' => 'Login Gagal',
                    'message' => 'Terjadi kesalahan pada sistem. Silakan coba lagi nanti.',
                ]);

        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('alert', [
            'type' => 'success',
            'title' => 'Logout Berhasil',
            'message' => 'Anda telah berhasil logout.',
        ]);
    }
}