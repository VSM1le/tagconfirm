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
        Schema::table('listitems', function (Blueprint $table) {
            $table->string('ship_to')->nullable()->default('-')->change(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listitems', function (Blueprint $table) {
            $table->string('ship_to')->nullable()->change(); 
        });
    }
};
