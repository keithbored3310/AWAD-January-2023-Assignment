<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function showCart($id)
    {
        $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();
        // dd($cart);
        return view('showCart')->with('cart', $cart);
    }

    public function showHistory($id)
    {
        $order = Order::where('user_id', $id)->get();
        return view('showHistory')->with('order', $order);
    }

    //Add item from menu page
    public function addToCart(Request $request, $id)
    {
        $item = Menu::find($request->id);
        $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();

        //items array
        $array = array(
            "id"=>$item->id,
            "name"=>$item->name,
            "description"=>$item->description,
            "category_id" =>$item->category_id,
            "price" =>$item->price,
            "quantity" =>$request->quantity,
        );

        if($cart == null)
        {
            $cart = new Cart;
            $cart->items = json_encode($array);
            $cart->status = 'pending';
            $cart->user_id = $id;
        }
        else
        {
            $item_list = json_decode($cart->items);
            $exists = 0;
            foreach($item_list as $i)
            {
                if($i['id'] == $item)
                {
                    $i['quantity'] = $i['quantity'] + $request->quantity;
                    $exists = 1;
                    break;
                }
            }
            if($exists = 0)
            {
                array_push($array, $item_list);
            }
            $cart->items = json_encode($item_list);
        }
        $cart->amount = $item->price * $request->quantity;
        $cart->save();

        return redirect()->back();
    }

    public function updateCart()
    {

    }

    public function checkout($id)
    {
        $cart = Cart::where('user_id', $id)->where('status', 'pending')->first();

        $order = new Order();
        $order->items = $cart->items;
        $order->status = 'pending';
        $order->amount = $cart->amount;
        $order->user_id = $id;

        $cart->status = 'complete';
        $cart->order_id = $order->id;
        $cart->save();
        return redirect()->route('showHistory');
    }


}
