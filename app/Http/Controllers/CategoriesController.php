<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $data = Categories::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Categories;
        $data->name = $request->name;
        $data->parent_id = $request->parent_id;
        $data->is_active = $request->is_active;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Categories::find($request->cart_id);
    
        $data->name = $request->name;
        $data->parent_id = $request->parent_id;
        $data->is_active = $request->is_active;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Categories::whereId($request->categorie_id)->delete();
        return "Categories deleted.";
    }
}
