<?php

use Illuminate\Database\Seeder;

class GoodsCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $goodsCats = factory(\App\Models\GoodsCat::class)->times(9)->make();
//        dump($goodsCats->toArray())
        \App\Models\GoodsCat::insert($goodsCats->toArray());
    }
}
