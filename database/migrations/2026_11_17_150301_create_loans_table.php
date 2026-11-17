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
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('copy_id')->constrained('copies')->onDelete('cascade');
        $table->foreignId('reader_id')->constrained('readers')->onDelete('cascade');
        
        $table->date('loan_date');
        $table->date('planned_return_date');
        $table->date('actual_return_date')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
