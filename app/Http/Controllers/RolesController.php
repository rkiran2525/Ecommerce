<?php

namespace App\Http\Controllers;

use App\Models\Roles;

use Illuminate\Http\Request;

class RolesController extends Controller
{
 
    public function index(Request $request)
    {
        $data = Roles::get();
 
        return $data;
    }
 
    public function store(Request $request)
    {
        $data = new Roles;
        $data->admin = $request->admin;
        $data->super_admin = $request->super_admin;
        $data->save();
 
        return $data;
    }
 
    public function update(Request $request)
    {
        $data = Roles::find($request->role_id);
        $data->admin = $request->admin;
        $data->super_admin = $request->super_admin;
        $data->save();
 
        return $data;
    }
 
    public function delete(Request $request)
    {
        Roles::whereId($request->role_id)->delete();
        return "Roles deleted.";
    }
}