<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GoodsCat;

class Goods extends Model
{
    //
    protected $fillable = ['goods_name', 'goods_cats_id', 'goods_stars', 'goods_price', 'goods_detail', 'goods_index_img'];

    public function goods_cats()
    {
        return $this->belongsTo(GoodsCat::class,'goods_cats_id','id');
    }
}
