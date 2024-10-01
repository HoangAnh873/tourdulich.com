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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 50);
            $table->string('email', 191);
            $table->string('tour_name', 191);
            $table->string('order_date')->default(0);
            $table->string('start_date')->default(0);
            $table->string(column: 'end_date')->default(0);
            $table->timestamps();
        });

        Schema::rename('order', 'orders');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
        Schema::rename('order', 'orders');
    }
};
