<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MstProduct;
use App\Models\PageMenuList;
use App\Http\Requests\StoreMstProductRequest;
use App\Http\Requests\UpdateMstProductRequest;
use App\Models\MstSalesMonth;
use Illuminate\Foundation\Bootstrap\HandleExceptions;

class MstProductController extends Controller
{
    public function index () {
        $data["results"] = MstProduct::with('product_names', 'prices', 'descriptions')->get();
        return view("product_management")->with($data);
    }

    public function create (StoreMstProductRequest $request) {
        $mst_products = $this->create_mst_products_data_1($request);
        $mst_products['created_at'] = now();
        try {
            DB::beginTransaction();
            $id = DB::table('mst_products')->insertGetId($mst_products);
            $data = $this->create_mst_products_data_2($request, $id);
            DB::table('product_names')->insert($data['product_name']);
            DB::table('prices')->insert($data['price']);
            DB::table('descriptions')->insert($data['description']);
            if (array_key_exists('sales_month', $data)) DB::table('mst_sales_months')->insert($data['sales_month']);
            DB::commit();
        } catch (HandleExceptions $e) {
            DB::rollBack();
        }
        return redirect('admin/product_management');
    }


    public function show_edit_screen ($id) {
        $data["results"] = MstProduct::with('product_names', 'prices', 'descriptions', 'sales_months')->find($id);
        return view("product_edit")->with($data);
    }

    public function update (StoreMstProductRequest $request, $id) {
        $mst_products = $this->create_mst_products_data_1($request);
        $mst_products['updated_at'] = now();
        try {
            DB::beginTransaction();
            DB::table('mst_products')->where('id', $id)->update($mst_products);
            $data = $this->create_mst_products_data_2($request, $id);
            $this->update_relation_table($data, $id);
            DB::commit();
        } catch (HandleExceptions $e) {
            DB::rollBack();
        }
        return redirect('admin/product_management');
    }

    private function create_mst_products_data_1($request) {
        return [
            'bag_hanging' => (int) (bool) $request->bag_hanging,
            'sold_out' => (int) (bool) $request->sold_out,
        ];
    }

    private function create_mst_products_data_2 ($request, $id) {
        $names = ['product_name', 'price', 'description', 'sales_month'];
        foreach ($names as $name) :
            if ($request->$name) {
                foreach ($request->$name as $value) $data[$name][] = ['product_id' => $id, $name => (string) $value];
            }
        endforeach;
        return $data;
    }

    private function update_relation_table($data, $id) {
        try {
            DB::beginTransaction();
            DB::table('mst_sales_months')->where('product_id', $id)->delete();
            DB::table('product_names')->where('product_id', $id)->delete();
            DB::table('prices')->where('product_id', $id)->delete();
            DB::table('descriptions')->where('product_id', $id)->delete();
            DB::table('mst_sales_months')->insert($data['sales_month']);
            DB::table('product_names')->insert($data['product_name']);
            DB::table('prices')->insert($data['price']);
            DB::table('descriptions')->insert($data['description']);
            DB::commit();
        } catch (HandleExceptions $e) {
            DB::rollBack();
        }
        return;
    }

}
