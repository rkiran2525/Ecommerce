<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Payments::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Payments;
        $data->user_id = $request->user_id;
        $data->order_id = $request->order_id;
        $data->payment_method = $request->payment_method;
        $data->transaction_id = $request->transaction_id;
        $data->status= $request->status;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Payments::find($request->payment_id);
        $data->user_id = $request->user_id;
        $data->order_id = $request->order_id;
        $data->tracking_id = $request->tracking_id;
        $data->payment_method = $request->payment_method;
        $data->status= $request->status;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Payments::whereId($request->payment_id)->delete();
        return "Payments deleted.";
    }
}