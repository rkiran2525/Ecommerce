<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Reviews::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Reviews;
        $data->user_id = $request->user_id;
        $data->product_id = $request->product_id;
        $data->rating = $request->rating;
        $data->comment = $request->comment;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Reviews::find($request->reviews_id);
        $data->user_id = $request->user_id;
        $data->product_id = $request->product_id;
        $data->rating = $request->rating;
        $data->comment = $request->comment;
        $data->save();
 ;
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Reviews::whereId($request->reviews_id)->delete();
        return "Reviews deleted.";
    }
}