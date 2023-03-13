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
        Schema::create('gym_card_exercises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gym_card_id');
            $table->unsignedBigInteger('exercise_id');
            $table->unsignedSmallInteger('day')->default(1);
            $table->unsignedSmallInteger('number_of_exercise')->default(1);
            $table->string('reps');
            $table->unsignedSmallInteger('sets')->default(4);
            $table->string('recovery')->nullable();
            $table->timestamps();

            $table->foreign('gym_card_id')
                ->references('id')
                ->on('gym_cards');

            $table->foreign('exercise_id')
                ->references('id')
                ->on('exercises');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_card_exercises');
    }
};
