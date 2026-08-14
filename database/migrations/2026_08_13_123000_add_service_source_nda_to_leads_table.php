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
        Schema::table('leads', function (Blueprint $table) {
            if (!Schema::hasColumn('leads', 'service')) {
                $table->string('service', 255)->nullable()->after('company');
            }
            if (!Schema::hasColumn('leads', 'source')) {
                $table->string('source', 255)->nullable()->after('service');
            }
            if (!Schema::hasColumn('leads', 'nda')) {
                $table->string('nda', 50)->nullable()->after('source');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            if (Schema::hasColumn('leads', 'service')) {
                $table->dropColumn('service');
            }
            if (Schema::hasColumn('leads', 'source')) {
                $table->dropColumn('source');
            }
            if (Schema::hasColumn('leads', 'nda')) {
                $table->dropColumn('nda');
            }
        });
    }
};
