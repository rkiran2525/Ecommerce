<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        $data = Products::get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = new Products;
        $data->name = $request->name;
        $data->categorie_id = $request->categorie_id;
        $data->brand_id = $request->brand_id;
        $data->mrp = $request->mrp;
        $data->sale_price = $request->sale_price;
        $data->discription = $request->discription;
        $data->quantity = $request->quantity;
        $data->min_quantiy = $request->min_quantiy;
        $data->max_quantiy = $request->max_quantiy;
        $data->size = $request->size;
        $data->save();

        return $data;
    }

    public function update(Request $request)
    {
        $data = Products::find($request->product_id);
        $data->name = $request->name;
        $data->category_id = $request->ategory_id;
        $data->brand_id = $request->brand_id;
        $data->mrp = $request->mrp;
        $data->sale_price = $request->sale_price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->min_quantity = $request->min_quantity;
        $data->max_quantity = $request->max_quantity;
        $data->size = $request->size;
        $data->save();

        return $data;
    }

    public function delete(Request $request)
    {
        Products::whereId($request->product_id)->delete();
        return "Products deleted.";
    }
}