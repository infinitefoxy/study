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
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->enum('anstellungsart', ['Befristet', 'Festanstellung']);
            $table->enum('standort', ['Berlin', 'Hamburg']);
            $table->enum('erfahrung', ['Trainee', 'Senior']);
            $table->enum('sprache', ['Deutsch', 'Englisch']);
            // $table->foreignId('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
