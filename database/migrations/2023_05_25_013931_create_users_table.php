<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 38);
            $table->string('last_name', 38);
            $table->string('email', 38);
            $table->string('password', 256);
            $table->string('user_name', 38);
            $table->timestamp('registered_at')->useCurrent();
            $table->timestamp('last_login')->nullable()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
