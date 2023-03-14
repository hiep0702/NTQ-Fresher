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
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description');
            $table->string('image')->nullable();
            $table->float('regular_price');
            $table->float('sale_price')->nullable();
            $table->integer('stock')->nullable();
            $table->enum('status', ['draft', 'published', 'scheduled'])->default('published');
            $table->integer('count_order')->nullable();
            $table->integer('rating')->nullable();
            $table->string('author')->nullable();;
            $table->string('product_type')->nullable();
            $table->integer('referProductId')->nullable();
            $table->float('tax')->nullable();
            $table->string('ship')->nullable();
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
