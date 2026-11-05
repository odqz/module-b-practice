<?php

use App\Models\Customer;
use App\Models\Event;
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
        Schema::create('event_accesses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Event::class, 'event_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Customer::class, 'cust_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_accesses');
    }
};
