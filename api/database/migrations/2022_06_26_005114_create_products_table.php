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
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('sku', 16)->unique();
            $table->text('description')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->boolean('published')->default(0);
            $table->boolean('discount')->default(0);
            $table->string('image_path')->nullable();
            $table->unsignedDecimal('price',  8,  2)->default(0);
            $table->enum('sizes', ["xs", "s", "m", "l", "xl"])->nullable();
            // $table->foreignId('category_id')->constrained('products');
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
