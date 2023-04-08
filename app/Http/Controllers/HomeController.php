<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('home');
    }

    public function showNews()
    {
        return view('showNews');
    }

    public function showMenu()
    {
    
       
        $menu = Menu::get();
        // dd($menu);
        return view('showMenu')->with('menu', $menu);
    }

    public function filterCategory(Request $request)
    {
        // dd($request);
        $menu = Menu::where('category_id', $request->category_id)->get();
        return view('showMenu')->with('menu', $menu);
    }
}
