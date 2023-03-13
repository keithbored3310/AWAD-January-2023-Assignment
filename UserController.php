<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showHome()
    {
        return view('homepage');
    }
    public function showMenu()
    {
        return view('menu');
    }
    public function showActivity()
    {
        return view('activity');
    }
    public function showAccount()
    {
        return view('account');
    }
}
