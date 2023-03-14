<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->integer('client_id')->unsigned();
            $table->float('value', 200)->nullable();
            $table->float('status', 2);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('client');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
