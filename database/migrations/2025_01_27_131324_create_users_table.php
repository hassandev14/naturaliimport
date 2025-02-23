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
        Schema::create('admin', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('username');
            $table->string('email')->unique();  // Ensures email is unique
            $table->string('password');
            $table->enum('role', ['admin', 'super_admin','customer'])->default('admin');  // Add role column with default value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
