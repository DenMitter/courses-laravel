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
        Schema::create('user_course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('score')->nullable();
            $table->timestamps();

            // IDX
            $table->index('user_id', 'user_course_user_idx');
            $table->index('course_id', 'user_course_course_idx');

            /// FK
            $table->foreign('user_id', 'user_course_user_fk')->on('users')->references('id');
            $table->foreign('course_id', 'user_course_course_fk')->on('courses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_course');
    }
};
