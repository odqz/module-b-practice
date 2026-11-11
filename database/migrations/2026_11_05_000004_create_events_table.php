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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->foreignId('cat_id')->constrained('categories', 'cat_id')->onDelete('cascade');
            $table->string('event_name', 150);
            $table->enum('event_type', ['public', 'private']);
            $table->string('event_city');
            $table->date('event_date');
            $table->time('event_time');
            $table->string('event_note', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
