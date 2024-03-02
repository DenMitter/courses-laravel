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
        Schema::create('course_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('lesson_id');
            $table->timestamps();

            // IDX
            $table->index('course_id', 'course_lesson_course_idx');
            $table->index('lesson_id', 'course_lesson_lesson_idx');

            /// FK
            $table->foreign('course_id', 'course_lesson_course_fk')->on('courses')->references('id');
            $table->foreign('lesson_id', 'course_lesson_lesson_fk')->on('lessons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lessons');
    }
};
