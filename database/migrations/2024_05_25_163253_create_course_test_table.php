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
        Schema::create('course_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('test_id');
            $table->timestamps();

            // IDX
            $table->index('course_id', 'course_test_course_idx');
            $table->index('test_id', 'course_test_test_idx');

            /// FK
            $table->foreign('course_id', 'course_test_course_fk')->on('courses')->references('id');
            $table->foreign('test_id', 'course_test_test_fk')->on('tests')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_tests');
    }
};
