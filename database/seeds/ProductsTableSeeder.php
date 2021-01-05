<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => '工裝褲',
            'slug' => '工裝褲',
            'description' => '縮口褲 飄帶多口袋大尺碼工作褲黑褲',
            'price' => 1480,
            'image' => '1480.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '吊帶不規則洋裝',
            'slug' => '吊帶不規則洋裝',
            'description' => '女套裝 吊帶不規則洋裝+復古點點長襯 兩件套',
            'price' => 442,
            'image' => '442.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '花襯衫',
            'slug' => '花襯衫',
            'description' => '女短袖襯衫 復古法式少女五分花襯衫',
            'price' => 350,
            'image' => '350.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '壓文寬褲',
            'slug' => '壓文寬褲',
            'description' => '女長褲 涼感木耳邊壓紋垂墜闊腿寬褲',
            'price' => 380,
            'image' => '380.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '假兩件落肩短袖',
            'slug' => '假兩件落肩短袖',
            'description' => '男短T 假兩件落肩短袖大學T 7色',
            'price' => 390,
            'image' => '390.jpg',
        ]);

        
        DB::table('products')->insert([
            'name' => '帆布鞋',
            'slug' => '帆布鞋',
            'description' => '帆布鞋 經典簡約素面百搭休閒鞋',
            'price' => 780,
            'image' => '780.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '運動襪',
            'slug' => '運動襪',
            'description' => '運動襪 多色棉質休閒中筒襪學生襪子(貼身物不可退換)',
            'price' => 77,
            'image' => '77.jpg',
        ]);

        DB::table('products')->insert([
            'name' => '騎士立領外套',
            'slug' => '騎士立領外套',
            'description' => '騎士外套修身挺版卡其夾克外套',
            'price' => 1280,
            'image' => '1280.jpg',
        ]);
    }
}
