<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstSalesMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [2, 	11],
            [2, 	12],
            [3, 	12],
            [3, 	1],
            [4, 	12],
            [4, 	11],
            [8, 	1],
            [8, 	2],
            [5, 	1],
            [5, 	2],
            [5, 	3],
            [6, 	1],
            [6, 	2],
            [6, 	3],
            [7, 	1],
            [7, 	2],
            [7, 	3],
            [9, 	2],
            [9, 	3],
            [10, 	2],
            [10, 	3],
            [11, 	3],
            [11, 	4],
            [12, 	3],
            [12, 	4],
            [12, 	5],
            [15, 	3],
            [15, 	4],
            [15, 	5],
            [15, 	6],
            [15, 	7],
            [15, 	8],
            [15, 	9],
            [13, 	4],
            [13, 	5],
            [16, 	4],
            [16, 	5],
            [16, 	6],
            [16, 	7],
            [16, 	8],
            [16, 	9],
            [17, 	4],
            [17, 	5],
            [17, 	6],
            [17, 	7],
            [17, 	8],
            [17, 	9],
            [14, 	5],
            [14, 	6],
            [14, 	7],
            [14, 	8],
            [1, 	9],
            [1, 	10]
        ];

        foreach ($array as $value) {
            DB::table('mst_sales_months')->insert([
                'product_id' => $value[0],
                'sales_month' => $value[1],
            ]);
        }
    }
}
