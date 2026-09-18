<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use App\Models\AdminSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $setting = AdminSetting::current();
        $currentHash = $setting->password_hash ?: config('admin.password_hash');

        if (! Hash::check($request->current_password, $currentHash)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        $setting->update(['password_hash' => Hash::make($request->new_password)]);

        AdminActivityLog::record('Changed the admin password');

        return back()->with('success', 'Password updated.');
    }
}
