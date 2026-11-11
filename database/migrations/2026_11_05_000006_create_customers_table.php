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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cust_id');
            $table->string('cust_fname', 20);
            $table->string('cust_lname', 20);
            $table->string('cust_phone', 15);
            $table->string('cust_addr1', 20);
            $table->string('cust_addr2', 20)->nullable();
            $table->string('cust_postcode', 10);
            $table->string('cust_email', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
