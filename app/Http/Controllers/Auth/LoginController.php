<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 新規情報編集保存
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|string|unique:users2,email',
            'password' => 'required|confirmed|string|min:4'
        ]);
        
        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'password' => Hash::make($request->password),
        ]);

        return view('auth/login');
    }

    /**
     * Display the login view.
     */
    // ログインページ
    public function showLoginPage()
    {
        return view('auth/login');
    }

    // 一般ログインアクション
    public function actionLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $email = $request->input('email');
            session(['email' => $email]);
            // return redirect()->to('/');
            return redirect('/index');
        }

        return back()->withErrors([
            'message' => 'メールアドレス又はパスワードが正しくありません。',
        ])->onlyInput('email');
    
    }

    // 管理ログインアクション
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ]);

        if (Auth::guard('admins')->attempt($credentials)) {
            $request->session()->regenerate();
            $email = $request->input('email');
            session(['email' => $email]);
            return redirect('/admin/item-index');
        }

        return back()->withErrors([
            'message' => 'メールアドレス又はパスワードが正しくありません。',
        ])->onlyInput('email');
    
    }
    
    //Logout
        public function actionLogout(Request $request)
        {
            Auth::logout();
     
            $request->session()->invalidate();
         
            $request->session()->regenerateToken();

            return redirect()->to('/');
        }


}
