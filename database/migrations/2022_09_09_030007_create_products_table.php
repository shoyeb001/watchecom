<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("product_slug");
            $table->integer("brand_id")->nullable();
            $table->integer("category_id");
            $table->string("short_desc");
            $table->string("long_desc");
            $table->integer("product_qty");
            $table->double("price");
            $table->string("product_thumbnail");
            $table->string("multi-img");
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
        Schema::dropIfExists('products');
    }
};
