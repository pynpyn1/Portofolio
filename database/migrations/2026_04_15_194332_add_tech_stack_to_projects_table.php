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
        Schema::table('projects', function (Blueprint $table) {
            // Nambahin kolom tech_stack setelah kolom link
            $table->string('tech_stack')->nullable()->after('link');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Biar kalo di-rollback, kolomnya diapus
            $table->dropColumn('tech_stack');
        });
    }
};