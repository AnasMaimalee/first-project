<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function store(Request $request){
        $duplicate= \Cart::search(function($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if($duplicate->isNotEmpty()){
            return redirect('/cart')->with('success', 'Item Is already in your Cart!');
        }
        \Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Bed');
        return redirect('/cart')->with('success', 'Item was added to your cart!');
    }



    public function destroy($id){
        \Cart::remove($id);
        return back()->with('success', 'Item has been removed!');
    }

    public function saveForLater($id){
        $item = \Cart::get($id);
        \Cart::remove($id);
        \Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Bed');
        return redirect('/cart')->with('success', 'Item has been saved for later!');
        
    }
}
