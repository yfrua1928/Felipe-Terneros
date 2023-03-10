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
        Schema::create('sale', function (Blueprint $table) {
            $table->increments('id')->unique(); 
            $table->integer('client_id')->unsigned();
            $table->float('quantity',100);
            $table->integer('inventary_id')->unsigned();
            $table->float('unit_value_rate',255);
            $table->float('Status',10);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('client');
            $table->foreign('inventary_id')->references('id')->on('inventary');
        });

    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('sale');
    }
};
