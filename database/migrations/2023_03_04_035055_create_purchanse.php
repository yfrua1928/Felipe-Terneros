<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('purchanse', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->integer('client_id')->unsigned();
            $table->integer('inventary_id')->unsigned();
            $table->float('quantity', 100);
            $table->float('unit_value_rate', 100);
            $table->float('total', 100);
            $table->float('status', 2);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('client');
            $table->foreign('inventary_id')->references('id')->on('inventary');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('purchanse');
    }
};
