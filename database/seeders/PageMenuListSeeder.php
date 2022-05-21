<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
  


class PageMenuListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['en' => 'home', 'ja' => 'みかん産直の清家農園　無農薬を追求して40年　自然のおくりもの'],
            ['en' => 'farm_introduction', 'ja' => '農園紹介'],
            ['en' => 'cultivation_method', 'ja' => '栽培方針'],
            ['en' => 'kinds_of_oranges', 'ja' => 'みかんの品種'],
            ['en' => 'orange_calendar', 'ja' => 'みかんカレンダー'],
            ['en' => 'this_months_oranges', 'ja' => '今月のみかん'],
            ['en' => 'price_shipping', 'ja' => '価格/送料'],
            ['en' => 'order', 'ja' => 'ご 注 文'],
            ['en' => 'orange_communication', 'ja' => 'みかん山通信'],
            ['en' => 'international_exchange', 'ja' => '国際交流'],
            ['en' => 'diary', 'ja' => 'ポレポレ日記'],
        ];
        foreach ($array as $value):
            DB::table('page_menu_lists')->insert($value);
        endforeach;
    }
}
