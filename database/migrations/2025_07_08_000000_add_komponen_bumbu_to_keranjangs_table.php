<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('keranjangs', function (Blueprint $table) {
            $table->json('komponen_bumbu')->nullable()->after('quantity');
        });
    }

    public function down(): void
    {
        Schema::table('keranjangs', function (Blueprint $table) {
            $table->dropColumn('komponen_bumbu');
        });
    }
}; 