<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->string('name', 200);
            $table->string('phone', 25);
            $table->string('email',150);
            $table->float('balance', 100);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
