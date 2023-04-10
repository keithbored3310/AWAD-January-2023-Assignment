<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

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

    public function edit($id)
    {
        $menu = Menu::findOrFail($menuId);
        return view('menu.editMenu', compact('menu'));
    }      
    
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
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

    // Show all categories
    public function categoryIndex()
    {
        $categories = Category::all();
        return view('categoryMaster', compact('categories'));
    }

    // Show the form for creating a new category
    public function categoryCreate()
    {
        return view('categoryCreate');
    }

    // Store a newly created category in the database.
    public function categoryStore(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:category|max:255',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.master');
    }

    // Show the form for editing the specified category
    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('categoryEdit',compact('category'));
    }

    // Update the specified category in the database
    public function categoryUpdate(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:category|max:255',
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.master');
    }

    // Remove the specified category from the database
    public function categoryDestroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.master');
    }
}
