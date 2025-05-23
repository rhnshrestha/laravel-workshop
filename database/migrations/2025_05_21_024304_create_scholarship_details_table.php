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
        Schema::create('scholarship_details', function (Blueprint $table) {
            $table->id('scholarship_id');
            $table->unsignedBigInteger('college_id'); // Foreign key
            $table->string('scholarship_name', 255);
            $table->text('description')->nullable();
            $table->string('field_of_study', 255)->nullable();
            
            $table->enum('type', ['Merit-based', 'Need-based', 'Sports', 'Others'])->default('Merit-based');

            $table->decimal('amount', 10, 2)->nullable();
            $table->text('eligibility_criteria')->nullable();

            $table->date('application_deadline')->nullable();

            $table->string('course_level', 100);
            
            // 0 = Inactive, 1 = Active, 2 = Rejected
            $table->tinyInteger('scholarship_status')->default(0);

            $table->timestamps(); // creates `created_at` and `updated_at`

            // Foreign key constraint
            $table->foreign('college_id')->references('college_id')->on('collegeDetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_details');
    }
};
