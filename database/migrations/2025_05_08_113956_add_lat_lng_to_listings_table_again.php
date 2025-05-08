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
        if (!Schema::hasColumn('listings', 'lat')) {
            Schema::table('listings', function (Blueprint $table) {
                $table->decimal('lat', 10, 8)->nullable();
            });
        }
        
        if (!Schema::hasColumn('listings', 'lng')) {
            Schema::table('listings', function (Blueprint $table) {
                $table->decimal('lng', 11, 8)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('listings', 'lat')) {
            Schema::table('listings', function (Blueprint $table) {
                $table->dropColumn('lat');
            });
        }
        
        if (Schema::hasColumn('listings', 'lng')) {
            Schema::table('listings', function (Blueprint $table) {
                $table->dropColumn('lng');
            });
        }
    }
};
