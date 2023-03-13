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
        Schema::create('gym_card_exercise_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gym_card_exercise_id');
            $table->string('body');
            $table->timestamps();

            $table->foreign('gym_card_exercise_id')
                ->references('id')
                ->on('gym_card_exercises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_card_exercise_notes');
    }
};
