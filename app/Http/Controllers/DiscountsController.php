<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{

    public function index(Request $request)
    {
        $data = Discounts::get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = new Discounts;
        $data->name = $request->name;
        $data->product_id = $request->product_id;
        $data->discount_type = $request->discount_type;
        $data->coupon_id = $request->coupon_id;
        $data->is_active = $request->is_active;
        $data->save();

        return $data;
    }

    public function update(Request $request)
    {
        $data = Discounts::find($request->discount_id);
        $data->name = $request->name;
        $data->product_id = $request->product_id;
        $data->discount_type = $request->discount_type;
        $data->coupon_id = $request->coupon_id;
        $data->is_active = $request->is_active;
        $data->save();

        return $data;
    }

    public function delete(Request $request)
    {
        Discounts::whereId($request->discount_id)->delete();
        return "Discounts deleted.";
    }
}

