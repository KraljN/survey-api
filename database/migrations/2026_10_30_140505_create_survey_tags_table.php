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
        Schema::create('survey_tags', function (Blueprint $table) {
            $table->primary(['tag_id', 'survey_id']);
            $table->foreignId('survey_id')->constrained()->restrictOnDelete();
            $table->foreignId('tag_id')->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_tags');
    }
};
