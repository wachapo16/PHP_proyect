<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('task_management', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['Por hacer', 'En progreso', 'Finalizada'])->default('Por hacer');
            $table->string('title', 30);
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('task_management');
    }
};
