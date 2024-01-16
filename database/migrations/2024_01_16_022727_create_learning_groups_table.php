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
        Schema::create('learning_groups', function (Blueprint $table) {
            $table->id();
            $table->enum('grade', ['x', 'xi', 'xii', 'xiii']);
            $table->foreignId('major_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('serial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classs');
    }
};
