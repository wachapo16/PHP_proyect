<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40);
            $table->LongText('content');
            $table->string('slug', 100);
            $table->string('summary', 120);
            $table->datetime('publisher_at');
            $table->datetime('created_at');
            $table->datetime('update_at')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
