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
    Schema::create('jlpt_questions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('admin_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('level_id')->constrained('levels')->onDelete('cascade')->onUpdate('cascade');
      $table->string('title');
      $table->boolean('is_public')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('jlpt_questions');
  }
};
