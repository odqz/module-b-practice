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
        Schema::create('order_pictures', function (Blueprint $table) {
            $table->id('order_picture_id');
            $table->foreignId('order_id')->constrained('orders', 'order_id')->onDelete('cascade');
            $table->foreignId('pic_id')->constrained('pictures', 'pic_id')->onDelete('cascade');
            $table->foreignId('pic_size_id')->constrained('picture_sizes', 'pic_size_id')->onDelete('cascade');
            $table->integer('pic_qty');
            $table->string('pic_order_note', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_pictures');
    }
};
