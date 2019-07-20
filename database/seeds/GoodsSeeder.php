<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $goodsCats = \App\Models\GoodsCat::all();
        $faker = app(Faker\Generator::class);

        $goods = factory(\App\Models\Goods::class)->times(50)->make()->each(function ($good) use ($faker, $goodsCats){
            $good->goods_cats_id = $faker->randomElement($goodsCats)['id'];
        });

        \App\Models\Goods::insert($goods->toArray());
    }
}
