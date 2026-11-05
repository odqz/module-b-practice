<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('picture_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('pic_size_labael', 50);
            $table->integer('pic_size_width');
            $table->integer('pic_size_height');
            $table->float('pic_size_price', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_sizes');
    }
};
