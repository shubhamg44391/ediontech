<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('posts')) {
            Schema::table('posts', function (Blueprint $table) {
                if (!Schema::hasColumn('posts', 'category_id')) {
                    $table->unsignedBigInteger('category_id')->nullable()->after('id');
                }
                if (!Schema::hasColumn('posts', 'image_alt')) {
                    $table->string('image_alt')->nullable()->after('image');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('posts')) {
            Schema::table('posts', function (Blueprint $table) {
                if (Schema::hasColumn('posts', 'category_id')) {
                    $table->dropColumn('category_id');
                }
                if (Schema::hasColumn('posts', 'image_alt')) {
                    $table->dropColumn('image_alt');
                }
            });
        }
    }
};
