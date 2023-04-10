<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = Menu::all();
        return view('master', compact('menuItems'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $menu = new Menu;
        $menu->name = $request->input('name');
        $menu->description = $request->input('description');
        $menu->category_id = $request->input('category_id');
        $menu->price = $request->input('price');
        $menu->quantity = $request->input('quantity');
        $menu->save();
        return redirect()->route('menu.master');
    }

    public function edit($menuId)
    {
        $menu = Menu::findOrFail($menuId);
        return view('menu.edit', compact('menu'));
    }      
    
    public function update(Request $request, $menuId)
    {
        $menu = Menu::findOrFail($menuId);
        $menu->name = $request->input('name');
        $menu->description = $request->input('description');
        $menu->category_id = $request->input('category_id');
        $menu->price = $request->input('price');
        $menu->quantity = $request->input('quantity');
        $menu->save();
        return redirect()->route('menu.master');
    }
    
    
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.master');
    }
}
