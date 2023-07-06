<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts_comments', function (Blueprint $table) {
            $table->id();
            $table->string('content',45);
            $table->datetime('publisher_at');
            $table->datetime('updated_at');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('posts_comments');
    }
};
