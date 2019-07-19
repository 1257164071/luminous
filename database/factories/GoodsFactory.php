<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Goods::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        //
        'goods_name' => $faker->words(3, true),
        'goods_stars'=> $faker->randomDigitNotNull,
        'goods_price'=> $faker->randomFloat(2, 0, 1000),
        'goods_detail'=> $faker->text(200),
        'goods_index_img'   =>  $faker->imageUrl(372, 420),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
