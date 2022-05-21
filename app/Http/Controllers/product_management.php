<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstProduct;
use App\Models\MstSalesMonth;

class product_management extends Controller
{
    public function index () {
        $data["results"] = MstProduct::get();
        return view("product_management")->with($data);
    }

    public function edit ($id) {
        $data["results"] = MstProduct::where("id", $id)->first();
        return view("product_edit")->with($data);
    }

    public function update (Request $request) {
        return dd($request->product_name);
    }
}
