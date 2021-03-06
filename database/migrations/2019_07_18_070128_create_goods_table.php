<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('goods_cats_id')->comment('关联商品分类表')->index();
            $table->string('goods_name');
            $table->integer('goods_stars')->nullable();
            $table->decimal('goods_price');
            $table->text('goods_introduce');
            $table->string('goods_detail',500);
            $table->string('goods_index_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
