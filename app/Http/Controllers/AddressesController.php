<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use Illuminate\Http\Request;

class AddressesController extends Controller

{

    public function index(Request $request)
    {
        $data = Addresses::get();
        return $data;
    }

    public function store(Request $request)
    {
        $data = new Addresses;
        $data->user_id = $request->user_id;
        $data->address_line1 = $request->address_line1;
        $data->address_line2 = $request->address_line2;
        $data->city = $request->city;
        $data->postel_code = $request->postel_code;
        $data->mobile_no = $request->mobile_no;
        $data->save();

        return $data;
    }

    public function update(Request $request)
    {
        $data = Addresses::find($request->address_id);
        $data->user_id = $request->user_id;
        $data->address_line1 = $request->address_line1;
        $data->address_line2 = $request->address_line2;
        $data->city = $request->city;
        $data->postel_code = $request->postel_code;
        $data->mobile_no = $request->mobile_no;
        $data->save();

        return $data;
    }

    public function delete(Request $request)
    {
        Addresses::whereId($request->address_id)->delete();
        return "Address deleted.";
    }
}