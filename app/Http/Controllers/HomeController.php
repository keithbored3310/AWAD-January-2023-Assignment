<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

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

    public function showMenu($id)
    {
        $menu = Menu::get();
        $category=Category::get();
        $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();
        // $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();
        // dd($cart);
        return view('showMenu')->with('menu', $menu)->with('category',$category)->with('cart',$cart);
    }

    public function filterCategory(Request $request)
    {
        // dd($request);
        $menu = Menu::where('category_id', $request->category_id)->get();
        $category=Category::get();
        $id=Auth::id();
        $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();
        return view('showMenu',['id'=> $id])->with('menu', $menu)->with('category',$category)->with('cart',$cart);
    }

    public function show($id)
    {
        $menu = Menu::find($id);
        $imagePath = Storage::disk('local')->url('menu/' . $menu->id . '.jpg');

        return view('menu.show', compact('menu', 'imagePath'));
    }

}
