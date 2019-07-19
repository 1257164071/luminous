<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/** @mixin \Eloquent */

class GoodsCat extends Model
{
    //
    protected $fillable = ['create_date','goods_cat_name','sort'];
    public function goods()
    {
        return $this->hasMany(Goods::class,'goods_cats_id','id');
    }
}
