<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $expectedEmail = config('admin.email');

        // The Settings screen can override the password hash without a
        // code change; fall back to the env-var hash if nothing is set.
        $expectedHash = AdminSetting::current()->password_hash ?: config('admin.password_hash');

        $valid = $expectedEmail
            && $expectedHash
            && strcasecmp($request->email, $expectedEmail) === 0
            && Hash::check($request->password, $expectedHash);

        if (! $valid) {
            return back()
                ->withInput($request->only('email'))
                ->with('error', 'Invalid email or password.');
        }

        $request->session()->regenerate();
        $request->session()->put('admin_authenticated', true);
        $request->session()->put('admin_logged_in_at', now());

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_authenticated', 'admin_logged_in_at']);
        $request->session()->regenerate();

        return redirect()->route('admin.login')->with('success', 'Logged out.');
    }
}
