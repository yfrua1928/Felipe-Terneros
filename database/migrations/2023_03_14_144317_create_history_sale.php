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
        Schema::create('history_sale', function (Blueprint $table) {
            $table->charset = 'utf8mb4'; 
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->timestamps();
            $table->float('sale_id');
            $table->float('value',200)->nullable();
            $table->float('status',2);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_sale');
    }
};
