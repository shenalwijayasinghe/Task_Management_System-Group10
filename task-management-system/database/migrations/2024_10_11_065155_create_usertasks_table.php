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
        Schema::create('usertasks', function (Blueprint $table) {
            $table->id();
            $table->string('task')->nullable(); 
            $table->string('description')->nullable(); 
            $table->date('duedate')->nullable(); 
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertasks');
    }
};
