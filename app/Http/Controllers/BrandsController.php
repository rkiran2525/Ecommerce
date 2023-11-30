<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{

    public function index(Request $request)
    {
        $data = Brands::get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = new Brands;
        $data->name = $request->name;
        $data->is_active = $request->is_active;
        $data->save();

        return $data;
    }

    public function update(Request $request)
    {
        $data = Brands::find($request->address_id);
        $data->name = $request->name;
        $data->is_active = $request->is_active;
        $data->save();

        return $data;
    }

    public function delete(Request $request)
    {
        Brands::whereId($request->brand_id)->delete();
        return "Brands deleted.";
    }
}


// {
//     public function index(Request $request)
//     {
//         try {
//             $is_active = $request->is_active ?? null;
//             $data = Brands::orderBy("name", "asc");
//             if (!empty($is_active)) {
//                 $data = $data->where("is_active", $is_active);
//             }
//             $data = $data->get();
//             return apiReqponse($data, true, DATA_FATCHED, STATUS_OK);
//         } catch (Exception $e) {
//             return apiReqponse('', false, $e->getMessage(), BAD_REQUEST);
//         }
//     }
 
//     public function store(Request $request)
//     {
//         $validation = Validator::make($request->all(), [
//             'name' => ['required', 'unique:assets'],
//             'is_active' => ['required']
//         ]);
//         if ($validation->fails()) {
//             $error = $validation->errors()->first();
//             return apiReqponse('', false, $error, BAD_REQUEST);
//         }
//         try {
//             $obj = new Brands();
//             $obj->name = $request->name;
//             $obj->is_active = $request->is_active;
//             $obj->save();
//             return apiReqponse($obj, true, DATA_STORE, STATUS_OK);
//         } catch (Exception $e) {
//             return apiReqponse('', false, $e->getMessage(), BAD_REQUEST);
//         }
//     }
 
//     public function update(Request $request)
//     {
//         $validation = Validator::make($request->all(), [
//             'name' => ['required', 'unique:Brandss,name,' . $request->brand_id],
//             'is_active' => ['required'],
//             'Brands_id' => ['required', 'exists:Brandss,id']
//         ]);
 
//         if ($validation->fails()) {
//             $error = $validation->errors()->first();
//             return apiReqponse('', false, $error, BAD_REQUEST);
//         }
//         try {
//             $obj = Brands::find($request->brand_id);
//             $obj->name = $request->name;
//             $obj->is_active = $request->is_active;
//             $obj->save();
//             return apiReqponse($obj, true, DATA_UPDATED, STATUS_OK);
//         } catch (Exception $e) {
//             return apiReqponse('', false, $e->getMessage(), BAD_REQUEST);
//         }
//     }
 
//     public function delete(Request $request)
//     {
//         try {
//             Brands::whereId($request->brand_id)->delete();
//             return apiReqponse('', true, DATA_DELETED, STATUS_OK);
//         } catch (Exception $e) {
//             return apiReqponse('', false, $e->getMessage(), BAD_REQUEST);
//         }
//     }
// }