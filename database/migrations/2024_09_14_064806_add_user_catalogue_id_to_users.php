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
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integer('user_catalogue_id')->default(2);
=======
            if (!Schema::hasColumn('users', 'user_catalogue_id')) {
                $table->integer('user_catalogue_id')->default(2);
            }
>>>>>>> bb67a26 (Cập nhật lại migration)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_catalogue_id');
        });
    }
};
