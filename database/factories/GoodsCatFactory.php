<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\GoodsCat::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        //
        'goods_cat_name'    =>  $faker->words(3, true),
        'sort'  =>  $faker->randomNumber(3, true),
        'create_date'   =>  $date_time,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
