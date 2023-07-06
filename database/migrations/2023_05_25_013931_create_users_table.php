<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 38);
            $table->string('last_name', 38)->nullable();
            $table->string('email',60);
            $table->string('password',60);
            $table->datetime('registered_at');
            $table->datetime('last_login');
            $table->string('user_name', 38);
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
