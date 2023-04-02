<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB; //import the database

class UserController extends Controller
{
    public function index()
    {
        // $data = DB::select("select * from item_table");
        $data = DB::table('item_table')->get();
        // $data=items::paginate(5);
        return view('index',['items'=>$data]);
    }
    public function showHome()
    {
        return view('homepage');
    }
    public function showMenu()
    {
        $data = DB::table('item_table')->get();
        return view('menu',['items'=>$data]);
    }
    public function showActivity()
    {
        return view('activity');
    }
    public function showAccount()
    {
        return view('account');
    }
    function dataest()
    {
        return DB::select("select * from item_table");
    }
}
