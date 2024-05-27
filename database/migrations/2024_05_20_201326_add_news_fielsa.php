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
        Schema::table('new_models', function(Blueprint $table) {
            $table->string('title');
            $table->string('image');
            $table->integer('days');
            $table->integer('hours');
            $table->integer('minutes');
            $table->integer('seconds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
