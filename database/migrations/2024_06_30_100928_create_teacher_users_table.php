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
        Schema::create('teacher_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // IDX
            $table->index('teacher_id', 'teacher_user_teacher_idx');
            $table->index('user_id', 'teacher_user_user_idx');

            // FK
            $table->foreign('teacher_id', 'teacher_user_teacher_fk')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('user_id', 'teacher_user_user_fk')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_user');
    }
};