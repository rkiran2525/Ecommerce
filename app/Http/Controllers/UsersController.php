<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(Request $request)
    {
        $data = Users::get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = new Users;
       
        $data->role_id = $request->role_id;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->mobile_no = $request->mobile_no;
        $data->profile = $request->profile;
        $data->facebook_id = $request->facebook_id;
        $data->google_id = $request->google_id;
        $data->save();
        return $data;
    }

    public function update(Request $request)
    {
        $data = Users::find($request->user_id);
        $data->role_id = $request->role_id;
        $data->username = $request->name;
        $data->email = $request->email;
        $data->passowrd = $request->password;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->mobile_no = $request->mobile_no;
        $data->profile = $request->profile;
        $data->facebook_id = $request->facebook_id;
        $data->google_id = $request->google_id;
        $data->save();

        return $data;
    }

    public function delete(Request $request)
    {
        Users::whereId($request->user_id)->delete();
        return "Users deleted.";
    }
}
