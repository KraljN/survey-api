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
        Schema::create('survey_assignments', function (Blueprint $table) {
            $table->primary(['user_id', 'survey_id']);
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->foreignId('survey_id')->constrained()->restrictOnDelete();
            $table->dateTime('assigned_at');
            $table->dateTime('due_date');
            $table->dateTime('completed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_assignments');
    }
};
