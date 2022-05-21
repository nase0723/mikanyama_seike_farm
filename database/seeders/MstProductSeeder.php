<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['product_name' => '①　みかん（極早生温州）', 'bag_hanging' => '0', 'description' => 'みかん好きで早生温州が待ちきれない方に', 'sold_out' => '1', 'price' => '10kg箱  3,300円<br>　5kg箱  2,300円'],
            ['product_name' => '①　みかん（極早生温州）', 'bag_hanging' => '0', 'description' => 'みかん好きで早生温州が待ちきれない方に', 'sold_out' => '1', 'price' => '10kg箱  3,300円<br>　5kg箱  2,300円'],
            ['product_name' => '②　みかん（早生温州）', 'bag_hanging' => '0', 'description' => '11月の早生みかんはきっぱりと甘酸っぱく12月は完熟特有な濃厚味<br>（家庭用に最適）', 'sold_out' => '1', 'price' => '10kg箱  3,600円<br>　5kg箱  2,800円'],
            ['product_name' => '③　みかん（南柑20号）', 'bag_hanging' => '0', 'description' => '糖度がとても高く酸味も程良く清家みかんにしては器量も良い<br>　（贈答用に最適）', 'sold_out' => '1', 'price' => '10kg箱  4,800円<br>　5kg箱  3,500円'],
            ['product_name' => '⑭　愛マドンナ<br>（農協名 紅まどんな）', 'bag_hanging' => '0', 'description' => '新しい食感で甘くゼリーのような果肉<br>皮が薄いので櫛形にカットすると食べやすい<br>高級感有り贈答用に最適', 'sold_out' => '0', 'price' => '３kg箱 4,100円'],
            ['product_name' => '④　ポンカン', 'bag_hanging' => '0', 'description' => '皮はむきやすく甘くて食べやすい<br>種が入っていることもある<br>酸に弱い方にピッタリ', 'sold_out' => '0', 'price' => '８kg箱  3,500円'],
            ['product_name' => '⑤　伊予柑', 'bag_hanging' => '0', 'description' => '芳香がありジューシー<br>濃厚な味<br>「いい予感」と受験生に好評', 'sold_out' => '0', 'price' => '８kg箱  3,300円'],
            ['product_name' => '⑥　ネーブル', 'bag_hanging' => '0', 'description' => '風味が良く独自のさわやかな香りがする<br>味は濃厚<br>スイカのようにカットすると食べやすい', 'sold_out' => '0', 'price' => '８kg箱  3,300円'],
            ['product_name' => '⑦　天香（あまか）', 'bag_hanging' => '1', 'description' => '新品種<br>清見×アンコールオレンジ<br>皮が薄くジューシーで甘い', 'sold_out' => '1', 'price' => '５kg箱  3,300円'],
            ['product_name' => '⑧　ハルカ', 'bag_hanging' => '0', 'description' => '日向夏の偶発実生<br>酸味はほのかで甘いが後味はサッパリしている<br>皮は厚いがポロポロ剥ける', 'sold_out' => '0', 'price' => '５kg箱  3,300円'],
            ['product_name' => '⑨　はるみ', 'bag_hanging' => '1', 'description' => 'ポンカン×清見<br>皮はむき易くプチプチ感あり中袋ごと食べられる<br>濃厚な甘酸っぱい味', 'sold_out' => '0', 'price' => '５kg箱  3,600円'],
            ['product_name' => '⑩　せとか', 'bag_hanging' => '1', 'description' => '清美×アンコール×マーコット<br>大変濃厚な味<br>皮は薄く中袋もも薄いので丸ごと食べられる<br>', 'sold_out' => '0', 'price' => '５kg箱  4,100円'],
            ['product_name' => '⑪　デコポン（有袋）', 'bag_hanging' => '1', 'description' => 'ポンカン×清見タンゴール<br>皮はむき易く甘酸っぱくしゃりっとした濃い味<br>', 'sold_out' => '0', 'price' => '家庭用　５kg箱  3,600円<br>贈答用　５kg箱  4,300円'],
            ['product_name' => '⑫　清見タンゴール', 'bag_hanging' => '1', 'description' => 'みかん（興津早生）×トロピタオレンジ<br>ちょっと剥きにくいけれどオレンジの香りがしてジューシーで濃厚な味わい', 'sold_out' => '0', 'price' => '５kg箱  3,600円'],
            ['product_name' => 'ポメロ（河内晩柑）', 'bag_hanging' => '0', 'description' => '別名　河内晩柑<br>和製グレープフルーツ<br>ジューシーなさわやか味<br>冷やすと絶品', 'sold_out' => '0', 'price' => '７kg箱  3,600円'],
            ['product_name' => '⑮　100％ほんとのジュース<br>１リットル　6本入り', 'bag_hanging' => '0', 'description' => '別名　みかん汁<br>完熟早生温州を搾ってビンに詰めたもの', 'sold_out' => '0', 'price' => '６本入り  3,600円'],
            ['product_name' => '⑯　100％清見のジュース<br>きよみちゃん７２０ml<br>４本入り　/　６本入り', 'bag_hanging' => '1', 'description' => '完熟した清見タンゴールだけを搾ってビンにつめました<br>ご贈答用に最適', 'sold_out' => '0', 'price' => '４本入り  3,400円<br>６本入り  4,800円'],
            ['product_name' => '⑰　みっくすジュース<br>（柑橘１００％）７２０ml<br>４本入り　/　６本入り', 'bag_hanging' => '0', 'description' => '各種の完熟柑橘を搾りました<br>深みのある濃厚な味', 'sold_out' => '0', 'price' => '４本入り  3,400円<br>６本入り  4,800円'],
        ];
        foreach ($array as $value):
            DB::table('mst_products')->insert($value);
        endforeach;
    }
}
