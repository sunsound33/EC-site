<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '32芯102SSCリケーブル',
            'product_description' => '102SSCより線を32本編み込んだリケーブル。中域から高音にかけて伸びがよく、低音はタイト',
            'price' => '78000',
            'img' => '32core-102ssc.jpeg',
            'type' => 'recable'
          ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '32芯４N純銀リケーブル ',
            'product_description' => 'オヤイデ４N純銀より線を32本編み込んだリケーブル。レンジの広く、澄んだ音、至高の逸品。',
            'price' => '128000',
            'img' => '32core-4nsilver.jpeg',
            'type' => 'recable'
        ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '32芯４n純銀&102SSCリケーブル',
            'product_description' => 'オヤイデ４N純銀より線(cold)と102SSCより線(hot)を16本ずつ編み込んだハイブリッドリケーブル。2つの線材の良いとこどりされた音に仕上がっています。',
            'price' => '98000',
            'img' => '32core-hybrid-4n102ssc.jpeg',
            'type' => 'recable'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '64芯４n純銀ミニミニ',
            'product_description' => 'オヤイデ４N純銀を64本編み込んだ3.5mm to 3.5 mmミニミニケーブル。レンジの広い、澄んだ音。',
            'price' => '38000',
            'img' => '64core-4nsilver-mini.jpeg',
            'type' => 'mini'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '40芯オーグラインαミニミニ',
            'product_description' => 'オーグラインαを40本編み込んだ3.5mm to 3.5mmミニミニケーブル。　余韻のある音',
            'price' => '42000',
            'img' => '40core-augline-alpha-mini.jpeg',
            'type' => 'mini'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '40芯オーグラインptミニミニ',
            'product_description' => 'オーグラインαを40本編み込んだ3.5mm to 3.5mmミニミニケーブル。　高解像度、芯のある音',
            'price' => '42000',
            'img' => '40core-augline-pt-mini.jpeg',
            'type' => 'mini'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '64芯４n純銀&102SSC Hybrid ミニミニ',
            'product_description' => 'オヤイデ４N純銀より線(cold)と102SSCより線(hot)を16本ずつ編み込んだミニミニケーブル。',
            'price' => '34000',
            'img' => '64core-hybrid-4n102ssc-mini.jpeg',
            'type' => 'mini'
        ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => 'artisan',
            'product_description' => '経験則を元にアイデア詰め込んだ8芯リケーブル　艶のあるボーカル 豊潤な音',
            'price' => '58000',
            'img' => 'costum-order-set-artisan.jpeg',
            'type' => 'recable'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => 'ヘッドホン用カスタムケーブル',
            'product_description' => 'お持ちのヘッドホン用ケーブルを作成致します。',
            'price' => '0',
            'img' => 'headphone-cable.jpeg',
            'type' => 'recable'
            ]);
            $store->save();

        $store = new \App\Models\Store([
            'product_id' => '1',
            'product_name' => '４N純銀USBケーブル',
            'product_description' => 'オヤイデ４N純銀を２４本使用し高品質なシルクを極線ごとに巻きシールド処理。データを電源を分離させました。ピュアな音。Btype仕様',
            'price' => '68000',
            'img' => '6core-4nsilver-usb.jpeg',
            'type' => 'usbcable'
            ]);
            $store->save();
    }
}
