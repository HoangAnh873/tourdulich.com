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
        Schema::table('bills', function (Blueprint $table) {
            $table->tinyInteger('publish')->default(0);
        });
=======
        if (!Schema::hasColumn('bills', 'publish')) {
            Schema::table('bills', function (Blueprint $table) {
                $table->tinyInteger('publish')->default(0)->notNull();
            });
        }
>>>>>>> bb67a26 (Cập nhật lại migration)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('publish');
        });
=======
        if (Schema::hasColumn('bills', 'publish')) {
            Schema::table('bills', function (Blueprint $table) {
                $table->dropColumn('publish');
            });
        }
>>>>>>> bb67a26 (Cập nhật lại migration)
    }
};
