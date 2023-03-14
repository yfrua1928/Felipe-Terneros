<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('history_payments', function (Blueprint $table) {
            $table->charset = 'utf8mb4'; 
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->timestamps();
            $table->float('client_id');
            $table->integer('user_id')->unsigned();
            $table->float('value',200);
            $table->float('status',2);
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('history_payments');
    }
   
};
