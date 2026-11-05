<?php

use App\Models\Order;
use App\Models\Picture;
use App\Models\PictureSize;
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
            $table->foreignIdFor(Order::class, 'order_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Picture::class, 'pic_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(PictureSize::class, 'pic_size_id')->constrained()->cascadeOnDelete();
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
