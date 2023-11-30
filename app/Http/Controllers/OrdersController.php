<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Orders::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Orders;
        $data->user_id = $request->user_id;
        $data->address_id = $request->address_id;
        $data->tracking_id = $request->tracking_id;
        $data->quantity = $request->quantity;
        $data->description=$request->description;
        $data->status = $request->status;
        $data->payment_status = $request->payment_status;
        $data->total= $request->total;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Orders::find($request->order_id);
        $data->user_id = $request->user_id;
        $data->address_id = $request->address_id;
        $data->tracking_id = $request->tracking_id;
        $data->quantity = $request->quantity;
        $data->status = $request->status;
        $data->payment_status = $request->payment_status;
        $data->total= $request->total;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Orders::whereId($request->order_id)->delete();
        return "Orders deleted.";
    }
}