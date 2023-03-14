<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->string('user',11)->unique();
            $table->string('password',50);
            $table->string('name',200);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->float('Type', 2);
            $table->float('status', 2);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
