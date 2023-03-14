<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    
    public function up(): void
    {
        Schema::create('inventary', function (Blueprint $table) {
            $table->charset = 'utf8mb4'; 
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id')->unique();
            $table->string('race_weight_age', 150);
            $table->float('quantity_sold', 200);
            $table->float('quantity_purchased', 200);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('inventary');
    }
};
