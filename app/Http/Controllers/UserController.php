<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->admin = new Admin();
        $this->users = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::all();

        return view('/profile', compact('admin'));
        // return view('/profile');
    }

    public function userprofile()
    {
        return view('/user-profile');
    }

    public function show(string $id)
    {
        // $carts = Cart::findOrFail($id);
        return view('/cart');
    }

}
