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
        Schema::create('rank', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name',255);
            $table->string('weight',100);
            $table->float('value',100);
            $table->string('status',10);
            $table->timestamps();
        });

    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('Rank');
    }
};
