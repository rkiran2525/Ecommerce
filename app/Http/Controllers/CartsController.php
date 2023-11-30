<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Carts::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Carts;
       
        $data->product_id= $request->product_id;
        $data->quantity = $request->quantity;
        $data->size = $request->size;
        $data->price = $request->price;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Carts::find($request->cart_id);
    
        $data->product_id= $request->product_id;
        $data->quantity = $request->quantity;
        $data->size = $request->size;
        $data->price = $request->price;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Carts::whereId($request->cart_id)->delete();
        return "Carts deleted.";
    }
}