<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('frontend.auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('name', 'email'));
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function password()
    {

        return view('frontend.auth.password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:5|confirmed',
        ]);

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password changed successfully.');
    }


}
