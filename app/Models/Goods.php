<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $fillable = ['goods_name', 'goods_cats_id', 'goods_stars', 'goods_price', 'goods_detail', 'goods_index_img'];
}
