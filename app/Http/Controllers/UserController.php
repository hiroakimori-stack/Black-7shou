<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->admin = new Admin();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::all();

        return view('/profile', compact('admin'));
    }

}
