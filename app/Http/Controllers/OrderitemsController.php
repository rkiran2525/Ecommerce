<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderitemsController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Orderitem::get();
 
        return $data;
    }

    public function store(Request $request)
    {
        $data = new Orderitem;
        $data->user_id = $request->user_id;
        $data->quantity = $request->quantity;
        $data->order_id = $request->order_id;
        $data->product_id = $request->product_id;
        $data->total = $request->total;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Orderitem::find($request->orderitem_id);
        $data->user_id = $request->user_id;
        $data->quantity = $request->quantity;
        $data->order_id = $request->order_id;
        $data->product_id = $request->product_id;
        $data->total = $request->total;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Orderitem::whereId($request->orderitem_id)->delete();
        return "Orderites deleted.";
    }
}