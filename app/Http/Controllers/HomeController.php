<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function beranda()
    {
        $user = Auth::user();
        return view('beranda', compact('user'));
    }
    public function bookmarks()
    {
        return view('bookmarks');
    }
    public function explore()
    {
        return view('explore');
    }
    public function notifications()
    {
        return view('notifications');
    }
}
