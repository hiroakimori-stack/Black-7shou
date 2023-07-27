<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class RepasswordController extends Controller {
    public function showResetForm()
    {
        return view('password.reset');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|string|min:4',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'ユーザーが見つかりませんでした。']);
        }
    
        $user->forceFill([
            'password' => Hash::make($request->password),
        ])->save();
    
        return redirect('/')->with('status', 'パスワードがリセットされました。');
    }
}