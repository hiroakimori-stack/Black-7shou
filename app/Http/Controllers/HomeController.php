<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $items = Item::all();
        $newss = News::all();

        return view('home',compact('items','newss'));
    }

    public function newsall() {
        $newss = News::all();

        $newss = News::paginate(3);
        return view('/user/news-all',compact('newss'));
    }
}
