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
<<<<<<< HEAD
        Schema::rename('order', 'orders');
=======
            if (Schema::hasTable('order') && !Schema::hasTable('orders')) {
                Schema::rename('order', 'orders');
            }
>>>>>>> bb67a26 (Cập nhật lại migration)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::rename('order', 'orders');
=======
            if (Schema::hasTable('order') && !Schema::hasTable('orders')) {
                Schema::rename('order', 'orders');
            }
>>>>>>> bb67a26 (Cập nhật lại migration)
    }
};
